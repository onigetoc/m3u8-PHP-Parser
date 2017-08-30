# m3u8 / m3u PHP Parser

m3u PHP Parser.m3u8 parser to json

## How to use it?

`m3u-parser.php?url=https://pastebin.com/raw/t1mBJ2Yi`

`m3u-parser.php?url=https://raw.githubusercontent.com/onigetoc/m3u8-PHP-Parser/master/ressources/demofile.m3u`

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
    "title": "Rrokum",
    "url": "http://82.114.65.202:1935/live/rrokumtv/playlist.m3u8",
    "tvg-id": "RrokumTV.al",
    "aspect-ratio": "16:9",
    "tvg-name": "RrokumTV.al",
    "tvg-language": "Albanian/Kosovo",
    "tvg-country": "KS",
    "tvg-logo": "https://2.bp.blogspot.com/-adXhlGiHqxw/WSGCBl9Y8LI/AAAAAAAAD5Q/-t48sLv989Uxb5hgB0b38QlfTdoAE576ACLcB/s1600/tvrrokum.png",
    "group-title": "TVSHQIP"
  },
  {
    "title": "JTV",
    "url": "http://84.20.77.50:554/live/rtmp.stream/playlist.m3u8",
    "tvg-id": "TVJUG.AL",
    "tvg-name": "TVJUG.AL",
    "tvg-language": "Albanian/Kosovo",
    "tvg-country": "AL",
    "tvg-logo": "https://4.bp.blogspot.com/-LXFMStwz6tI/WSGLzk0QgVI/AAAAAAAAD6I/T-rFp4KD_c4zbCRN9hGrjy_jS2nmXgPJwCLcB/s1600/tvjug.png",
    "group-title": "TVSHQIP"
  }
]
```
