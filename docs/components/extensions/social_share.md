# social-share
>Displays a social share button.

[AMP project reference][1]

[Source code][2]

| Argument                            | Type       | Required | Default value | More information                                                                                      | 
|:------------------------------------|:----------:|:--------:|:-------------:|:------------------------------------------------------------------------------------------------------|
| social_share_class                  | string     | false    |               |                                                                                                       |
| social_share_height                 | int        | true     |               |                                                                                                       |
| social_share_id                     | string     | false    |               |                                                                                                       |
| social_share_layout                 | string     | false    |               | only it can be "container", "fill", "fixed", "fixed-height", "flex-item", "nodisplay" or "responsive" |
| social_share_title                  | string     | false    |               |                                                                                                       |
| social_share_type                   | string     | true     |               |                                                                                                       |
| social_share_data_mode              | string     | false    |               |                                                                                                       |
| social_share_data_param_app_id      | string     | false    |               |                                                                                                       |
| social_share_data_param_body        | string     | false    |               |                                                                                                       |
| social_share_data_param_description | string     | false    |               |                                                                                                       |
| social_share_data_param_href        | string     | false    |               |                                                                                                       |
| social_share_data_param_media       | string     | false    |               |                                                                                                       |
| social_share_data_param_quote       | string     | false    |               |                                                                                                       |
| social_share_data_param_recipient   | string     | false    |               |                                                                                                       |
| social_share_data_param_subject     | string     | false    |               |                                                                                                       |
| social_share_data_param_text        | string     | false    |               |                                                                                                       |
| social_share_data_param_url         | string     | false    |               |                                                                                                       |
| social_share_data_share_endpoint    | string     | false    |               |                                                                                                       |
| social_share_width                  | int        | true     |               |                                                                                                       |

>More info about data-param-* can be consumed in [official documentation][3]

Extension points:
* social_share_content

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-social-share',

    {# ... #}
] %}

{% include '@AMP/components/extensions/social_share.html.twig' with {
    social_share_data_param_text: 'Check out this article',
    social_share_data_share_endpoint: 'whatsapp://send',
    social_share_height: 150,
    social_share_title: 'Share on Whatsapp',
    social_share_type: 'whatsapp',
    social_share_widtht: 300
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-social-share/amp-social-share.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/social_share.html.twig
[3]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-social-share/amp-social-share.md#pre-configured-providers
