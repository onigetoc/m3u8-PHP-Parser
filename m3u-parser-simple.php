<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('allow-origin: *');

header("Access-Control-Allow-Headers: ACCEPT, CONTENT-TYPE, X-CSRF-TOKEN");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
//header('Access-Control-Allow-Origin: http://www.foo.com', false);

//    if (isset($_SERVER['HTTP_ORIGIN'])) {
//        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
//        header('Access-Control-Allow-Credentials: true');
//        header('Access-Control-Max-Age: 86400');    // cache for 1 day
//    }
//
//    // Access-Control headers are received during OPTIONS requests
//    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//
//        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
//            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
//
//        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
//            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
//
//        exit(0);
//    }

$url = $_GET["url"];

if(isset($url)) {
  $m3ufile = file_get_contents($url);
} else {
  $m3ufile = file_get_contents('http://pastebin.com/raw/QtUHJ78r');
}

//$re = '/#(EXTINF|EXTM3U):(.+?)[,]\s?(.+?)[\r\n]+?((?:https?|rtmp):\/\/(?:\S*?\.\S*?)(?:[\s)\[\]{};"\'<]|\.\s|$))/';
$re = '/#EXTINF:(.+?)[,]\s?(.+?)[\r\n]+?((?:https?|rtmp):\/\/(?:\S*?\.\S*?)(?:[\s)\[\]{};"\'<]|\.\s|$))/';
//$attributes = '/([a-zA-Z0-9\-]+?)="([^"]*)"/';
$attributes = '/([a-zA-Z0-9\-\_]+?)="([^"]*)"/';


$m3ufile = str_replace('tvg-logo', 'thumb_square', $m3ufile);
$m3ufile = str_replace('tvg-id', 'id', $m3ufile);
//$m3ufile = str_replace('tvg-name', 'group', $m3ufile);
//$m3ufile = str_replace('tvg-name', 'name', $m3ufile);
$m3ufile = str_replace('tvg-name', 'author', $m3ufile);
$m3ufile = str_replace('group-title', 'group', $m3ufile);

//print_r($m3ufile);

//$m3ufile = str_replace(' ', '_', $m3ufile); // FOR GROUP

preg_match_all($re, $m3ufile, $matches);

// Print the entire match result
//print_r($matches);

$items = array();

 foreach($matches[0] as $list) {
    
     //echo "$list <br>";
	 
   preg_match($re, $list, $matchList);

   //$mediaURL = str_replace("\r\n","",$matchList[4]);
   //$mediaURL = str_replace("\n","",$matchList[4]);
   //$mediaURL = str_replace("\n","",$mediaURL);
   $mediaURL = preg_replace("/[\n\r]/","",$matchList[3]);
   $mediaURL = preg_replace('/\s+/', '', $mediaURL);
   //$mediaURL = preg_replace( "/\r|\n/", "", $matches[4] );
   

   $newdata =  array (
    //'ATTRIBUTE' => $matchList[2],
    'service' => "iptv",
    'title' => $matchList[2],
    //'playlistURL' => (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
    'playlistURL' => $_SERVER['QUERY_STRING'],
    'playlistURL' => str_replace("url=","",$_SERVER['QUERY_STRING']),
    'media_url' => $mediaURL,
//    'author' => "Author name or provider",
    'url' => $mediaURL
    );
    
    preg_match_all($attributes, $list, $matches, PREG_SET_ORDER);
    
    foreach ($matches as $match) {
       $newdata[$match[1]] = $match[2];
    }
    
    //array_push($newdata,$attribute);
    //$newdata[] = $attribute;
	 
	 $items[] = $newdata;
	 //$items[] = $matchList[2];
    
 }

//   $globalitem =  array (
//    //'ATTRIBUTE' => $matchList[2],
//    'item' => $items
//    );

//$globalitem[$items] ;
//$globalitems['item'] = $items;

//$globalist['list'] = $globalitems;

   $globalitems =  array (
    //'ATTRIBUTE' => $matchList[2],
    'service' => "iptv",
    'item' => $items,
    );

  $globalist['list'] = $globalitems;

//print_r($items);

$callback= $_GET['callback'];

  if($callback)
    echo $callback. '(' . json_encode($globalist) . ')';  // jsonP callback
  else
    echo json_encode($globalist);

?>
