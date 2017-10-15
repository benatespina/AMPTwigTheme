# iframe
>Displays an iframe.

[AMP project reference][1]

[Source code][2]

| Argument            | Type     | Required | Default value | More information                                                                         | 
|:--------------------|:--------:|:--------:|:-------------:|:-----------------------------------------------------------------------------------------|
| iframe_class        | string   | false    |               |                                                                                          |
| iframe_height       | int      | false    |               |                                                                                          |
| iframe_id           | string   | false    |               |                                                                                          |
| iframe_layout       | string   | false    | responsive    | only it can be "fill", "fixed", "fixed-height", "flex-item", "nodisplay" or "responsive" |
| iframe_resizable    | string   | false    |               | only it can be "resizable"                                                               |
| iframe_sandbox      | string   | false    | allow-scripts | check [here][3] sandbox restrictions                                                     |
| iframe_src          | string   | true     |               |                                                                                          |
| iframe_width        | int      | false    |               |                                                                                          |

Extensions points:
* iframe_children

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-iframe',

    {# ... #}
] %}

{% include '@AMP/components/extensions/iframe.html.twig' with {
    iframe_src: 'https://benatespina.com',
    iframe_height: 20,
    iframe_width: 30
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-iframe/amp-iframe.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/iframe.html.twig
[3]: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe#attr-sandbox
