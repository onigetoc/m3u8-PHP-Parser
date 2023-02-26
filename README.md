# m3u8 / m3u PHP Parser

m3u PHP Parser.m3u8 parser to json

## How to use it? (With or without callback)

`/m3u-parser.php?callback=jQuery112403360297908445591&url=https://bit.ly/IPTVLIVE`

`/m3u-parser.php?url=https://raw.githubusercontent.com/onigetoc/m3u8-PHP-Parser/master/ressources/demofile.m3u`

Markdown created with [Editconvert](http://codesniff.com/editconvert/)

## Result for m3u-parser.php

```json
{
  "list": {
    "service": "iptv",
    "title": "iptv",
    "item": [
      {
        "service": "iptv",
        "title": "Rrokum",
        "playlistURL": "https://raw.githubusercontent.com/onigetoc/m3u8-PHP-Parser/master/ressources/demofile.m3u",
        "media_url": "http://82.114.65.202:1935/live/rrokumtv/playlist.m3u8",
        "url": "http://82.114.65.202:1935/live/rrokumtv/playlist.m3u8",
        "id": "RrokumTV.al",
        "aspect-ratio": "16:9",
        "author": "RrokumTV.al",
        "language": "Albanian/Kosovo",
        "country": "KS",
        "thumb_square": "https://2.bp.blogspot.com/-adXhlGiHqxw/WSGCBl9Y8LI/AAAAAAAAD5Q/-t48sLv989Uxb5hgB0b38QlfTdoAE576ACLcB/s1600/tvrrokum.png",
        "group": "TVSHQIP"
      },
     {
        "service": "iptv",
        "title": "JTV",
        "playlistURL": "https://raw.githubusercontent.com/onigetoc/m3u8-PHP-Parser/master/ressources/demofile.m3u",
        "media_url": "http://84.20.77.50:554/live/rtmp.stream/playlist.m3u8",
        "url": "http://84.20.77.50:554/live/rtmp.stream/playlist.m3u8",
        "id": "TVJUG.AL",
        "author": "TVJUG.AL",
        "language": "Albanian/Kosovo",
        "country": "AL",
        "thumb_square": "https://4.bp.blogspot.com/-LXFMStwz6tI/WSGLzk0QgVI/AAAAAAAAD6I/T-rFp4KD_c4zbCRN9hGrjy_jS2nmXgPJwCLcB/s1600/tvjug.png",
        "group": "TVSHQIP"
      }
    ]
  }
}
```

## Result for m3u-parser-simple.php

```json
[
  {
    "id": 1,
    "tvtitle": "Newsmax TV",
    "tvmedia": "http://nmxlive.akamaized.net/hls/live/529965/Live_1/index.m3u8",
    "tvname": "Newsmax TV",
    "tvlanguage": "English",
    "tvcountry": "US",
    "tvid": "Newsmax-TV",
    "tvlogo": "http://i.imgur.com/Twkovic.gif",
    "tvgroup": "Entertainment"
  },
  {
    "id": 2,
    "tvtitle": "Infowars Live",
    "tvmedia": "http://infowarslive-lh.akamaihd.net/i/infowarslivestream_1@353459/index_800_av-p.m3u8",
    "tvlogo": "http://i.imgur.com/ODIWC6n.jpg",
    "tvname": "Infowars",
    "tvid": "Infowars",
    "tvgroup": "News"
  },
]
```

#### I used M3U8 PHP Parser on my website to load and play multiple IPTV Playlists (With ajax) and with my Videojs [videojs-unmute](https://github.com/onigetoc/videojs-unmute) plugin to mute & unmute autoplayed video.
Live Demo: [hlsiptv.com](https://hlsiptv.com/)
