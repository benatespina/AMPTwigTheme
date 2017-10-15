# pixel
> Can be used as a typical tracking pixel to count pageviews

[AMP project reference][1]

[Source code][2]

| Argument              | Type       | Required | Default value | More information                              | 
|:----------------------|:----------:|:--------:|:-------------:|:----------------------------------------------|
| pixel_height          | int        | false    |               |                                               |
| pixel_heights         | string     | false    |               | only matters when the layout is "responsive"  |
| pixel_id              | string     | false    |               |                                               |
| pixel_layout          | string     | false    | nodisplay     | only it can be "nodisplay" or "responsive"    |
| pixel_media           | string     | false    |               |                                               |
| pixel_noloading       | string     | false    |               | only it can be "noloading"                    |
| pixel_on              | string     | false    |               |                                               |
| pixel_referrer_policy | string     | false    |               | only it can be "no-referrer"                  |
| pixel_sizes           | string     | false    |               |                                               |
| pixel_src             | string     | false    |               |                                               |
| pixel_width           | int        | true     |               |                                               |

Extension points:
    * pixel_fallback_content
    * pixel_placeholder_content

## Example

```twig
{% include '@AMP/components/builtins/pixel.html.twig' with {
    pixel_src: 'https://google.com'
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/builtins/amp-pixel.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/builtins/pixel.html.twig
