# img
> A runtime-managed replacement for the HTML img tag

[AMP project reference][1]

[Source code][2]

| Argument            | Type       | Required | Default value | More information                              | 
|:--------------------|:----------:|:--------:|:-------------:|:----------------------------------------------|
| img_alt             | string     | true     |               |                                               |
| img_attribution     | string     | false    |               |                                               |
| img_class           | string     | false    |               |                                               |
| img_height          | int        | true     |               |                                               |
| img_heights         | string     | false    |               | only matters when the layout is "responsive"  |
| img_id              | string     | false    |               |                                               |
| img_layout          | string     | false    | responsive    | only it can be "nodisplay" or "responsive"    |
| img_media           | string     | false    |               |                                               |
| img_noloading       | string     | false    |               | only it can be "noloading"                    |
| img_on              | string     | false    |               |                                               |
| img_sizes           | string     | false    |               |                                               |
| img_src             | string     | true     |               |                                               |
| img_srcset          | string     | false    |               |                                               |
| img_width           | int        | true     |               |                                               |

Extension points:
* img_fallback_content
* img_placeholder_content

## Example

```twig
{% include '@AMP/components/builtins/img.html.twig' with {
    img_src: '/images/02.jpg',
    img_srcset: '/images/03.jpg 640w,/images/04.jpg 320w',
    img_layout: 'responsive',
    img_height: 20,
    img_width: 30
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/builtins/amp-img.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/builtins/img.html.twig
