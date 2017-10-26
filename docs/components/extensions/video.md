# video
>A replacement for the HTML5 video tag; only to be used for direct HTML5 video file embeds.

[AMP project reference][1]

[Source code][2]

| Argument                      | Type     | Required | Default value | More information                                                                         | 
|:------------------------------|:--------:|:--------:|:-------------:|:-----------------------------------------------------------------------------------------|
| video_album                   | string   | false    |               |                                                                                          |
| video_artist                  | string   | false    |               |                                                                                          |
| video_artwork                 | string   | false    |               |                                                                                          |
| video_autoplay                | bool     | false    | false         |                                                                                          |
| video_class                   | string   | false    |               |                                                                                          |
| video_controls                | bool     | false    | false         |                                                                                          |
| video_controls_list           | bool     | false    | false         |                                                                                          |
| video_crossorigin             | bool     | false    | false         |                                                                                          |
| video_disableremoteplayback   | bool     | false    | false         |                                                                                          |
| video_height                  | int      | false    |               |                                                                                          |
| video_heights                 | string   | false    |               | only matters when the layout is "responsive"                                             |
| video_id                      | string   | false    |               |                                                                                          |
| video_layout                  | string   | true     |               | only it can be "fill", "fixed", "fixed-height", "flex-item", "nodisplay" or "responsive" |
| video_loop                    | bool     | false    |               |                                                                                          |
| video_media                   | string   | false    |               |                                                                                          |
| video_noloading               | string   | false    |               | only it can be "noloading"                                                               |
| video_on                      | string   | false    |               |                                                                                          |
| video_poster                  | string   | false    |               |                                                                                          |
| video_sizes                   | string   | false    |               |                                                                                          |
| video_src                     | string   | false    |               |                                                                                          |
| video_sources                 | array    | false    |               | key/value array with "src" and "type" properties                                         |
| video_title                   | string   | false    |               |                                                                                          |
| video_tracks                  | array    | false    |               | key/value array with "src", "kind", "scrlang" and "label" properties                     |
| video_width                   | int      | false    |               |                                                                                          |

Extensions points:
* video_fallback_content
* video_fallback_placeholder

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-video',

    {# ... #}
] %}

{% include '@AMP/components/extensions/video.html.twig' with {
    video_autoplay: true,
    video_controls: true,
    video_height: 10,
    video_layout: 'responsive',
    video_poster: 'https://ampbyexample.com/img/tokyo.jpg',
    video_sources: [{
        type: 'video/webm',
        src: 'https://ampbyexample.com/video/tokyo.webm'
    }, {
        type: 'video/ogg',
        src: 'https://ampbyexample.com/video/tokyo.ogg'
    }],
    video_src: 'https://ampbyexample.com/video/tokyo.mp4',
    video_width: 20
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-video/amp-video.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/video.html.twig
