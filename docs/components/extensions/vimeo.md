# vimeo
>Displays a Vimeo video.

[AMP project reference][1]

[Source code][2]

| Argument                      | Type     | Required | Default value | More information                                                                         | 
|:------------------------------|:--------:|:--------:|:-------------:|:-----------------------------------------------------------------------------------------|
| vimeo_class                   | string   | false    |               |                                                                                          |
| vimeo_data_video_id           | string   | true     |               |                                                                                          |
| vimeo_height                  | int      | false    |               |                                                                                          |
| vimeo_heights                 | string   | false    |               | only matters when the layout is "responsive"                                             |
| vimeo_id                      | string   | false    |               |                                                                                          |
| vimeo_layout                  | string   | true     | responsive    | only it can be "fill", "fixed", "fixed-height", "flex-item", "nodisplay" or "responsive" |
| vimeo_noloading               | string   | false    |               | only it can be "noloading"                                                               |
| vimeo_on                      | string   | false    |               |                                                                                          |
| vimeo_sizes                   | string   | false    |               |                                                                                          |
| vimeo_width                   | int      | false    |               |                                                                                          |

Extensions points:
* vimeo_fallback_content
* vimeo_fallback_placeholder

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-vimeo',

    {# ... #}
] %}

{% include '@AMP/components/extensions/vimeo.html.twig' with {
    vimeo_data_video_id: '27246366',
    vimeo_height: 280,
    vimeo_width:500
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-vimeo/amp-vimeo.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/vimeo.html.twig
