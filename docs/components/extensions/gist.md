# gist
>Displays a GitHub Gist.

[AMP project reference][1]

[Source code][2]

| Argument            | Type     | Required | Default value | More information | 
|:--------------------|:--------:|:--------:|:-------------:|:-----------------|
| gist_data_gistid    | string   | true     |               |                  |
| gist_height         | int      | true     |               |                  |
| gist_data_file      | string   | false    |               |                  |

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-gist',

    {# ... #}
] %}

{% include '@AMP/components/extensions/gist.html.twig' with {
    gist_data_gistid: 'a19e811dcd7df10c4da0931641538497',
    gist_height: 40,
    gist_data_file: 'hi.c'
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-gist/amp-gist.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/gist.html.twig
