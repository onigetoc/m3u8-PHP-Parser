$(document).ready(function() {
    getPlaylists("https://pastebin.com/raw/t1mBJ2Yi");
    $('#m3uForm').on('submit', function(e) {
        e.preventDefault();
        var playlists = $('#playlists').val();
        getPlaylists(playlists);
    });
});
function getPlaylists(playlists) {
    $('#result').html('');
    $.ajax({
        url: '//yourwebsite.com/m3u8-PHP-Parser/m3u-parser-simple.php',
        method: 'GET',
        dataType: 'jsonP',
        data: {
            url: playlists,
        }
    }).done(function(data) {
        $('#result').text('Total: ' + data.length + ' Channels found');
        $.each(data, function(i, item) {
            var tvglogo = '';
            if (typeof item.tvlogo != 'undefined') tvglogo = '<img src="' + item.tvlogo + '" alt="' + item.tvtitle + '" style="width:38px;height:38px;float:left;marging: 5px;border:solid 1px #ccc;margin-right:5px">';
            $('#result').append('<li><a href="' + item.tvmedia + '">' + tvglogo + ' â–º ' + item.tvtitle + '</a><br>' + item.tvmedia + '</li>');
        });
    });
}
/* TEST TO LOAD VIDEO WITH VIDEOJS */
/*
$(document).on('click', '#result a', function(e) {
    e.preventDefault();
    var $this = $(this);
    var vidTitle = $this.text().replace("â–º ", "");
    $('#vidTitle').text(vidTitle);
    $('#result a').removeClass('bold');
    $this.addClass('bold');
    var mediaUrl = $this.attr('href');
    loadStream(mediaUrl)
});
*/
