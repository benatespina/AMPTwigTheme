# youtube
>Displays a YouTube video.

[AMP project reference][1]

[Source code][2]

| Argument              | Type     | Required | Default value | More information                                                                         | 
|:----------------------|:--------:|:--------:|:-------------:|:-----------------------------------------------------------------------------------------|
| youtube_autoplay      | boolean  | false    |               |                                                                                          |
| youtube_class         | string   | false    |               |                                                                                          |
| youtube_data_params   | array    | false    |               | key/value array                                                                          |
| youtube_data_videoid  | string   | true     |               |                                                                                          |
| youtube_height        | int      | false    |               |                                                                                          |
| youtube_heights       | string   | false    |               | only matters when the layout is "responsive"                                             |
| youtube_id            | string   | false    |               |                                                                                          |
| youtube_layout        | string   | false    | responsive    | only it can be "fill", "fixed", "fixed-height", "flex-item", "nodisplay" or "responsive" |
| youtube_media         | string   | false    |               |                                                                                          |
| youtube_noloading     | string   | false    |               | only it can be "noloading"                                                               |
| youtube_on            | string   | false    |               |                                                                                          |
| youtube_sizes         | string   | false    |               |                                                                                          |
| youtube_width         | int      | false    |               |                                                                                          |

Extensions points:
* youtube_fallback
* youtube_placeholder

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-youtube',

    {# ... #}
] %}

{% include '@AMP/components/extensions/youtube.html.twig' with {
    youtube_data_videoid: 'hWrWmU6VclA',
    youtube_height: '20',
    youtube_width: '30'
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-youtube/amp-youtube.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/youtube.html.twig
