# ad
>A container to display an ad. The amp-embed is an alias to the amp-ad tag,
>deriving all of its functionality with a different tag name. Use amp-embed when
>semantically more accurate. AMP documents only support ads/embeds served via HTTPS.

[AMP project reference][1]

[Source code][2]

| Argument                         | Type       | Required | Default value | More information                              | 
|:---------------------------------|:----------:|:--------:|:-------------:|:----------------------------------------------|
| ad_class                         | string     | false    |               |                                               |
| ad_data_consent_notification_id  | string     | false    |               |                                               |
| ad_data_loading_strategy         | int        | false    | 3             | only it can be 0, 1, 2 or 3                   |
| ad_data_vars                     | array      | false    |               | key/value array                               |
| ad_height                        | int        | true     |               |                                               |
| ad_heights                       | string     | false    |               | only matters when the layout is "responsive"  |
| ad_id                            | string     | false    |               |                                               |
| ad_json                          | string     | false    |               |                                               |
| ad_layout                        | string     | false    |               | only it can be "nodisplay" or "responsive"    |
| ad_media                         | string     | false    |               |                                               |
| ad_noloading                     | string     | false    |               | only it can be "noloading"                    |
| ad_on                            | string     | false    |               |                                               |
| ad_src                           | string     | false    |               |                                               |
| ad_sizes                         | string     | false    |               |                                               |
| ad_type                          | string     | true     |               | only it can be one of this [set][3]           |
| ad_type_data_attributes          | array      | false    |               | key/value array                               |
| ad_width                         | int        | true     |               |                                               |

Extension points:
* ad_fallback
* ad_placeholder

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-ad',

    {# ... #}
] %}

{% include '@AMP/components/extensions/ad.html.twig' with {
    ad_type: 'adsense',
    ad_type_data_attributes: {
        'data-ad-client': 'ca-pub-2005682797531342',
        'data-ad-slot': '7046626912'
    },
    ad_height: '200',
    ad_width: '200'
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-ad/amp-ad.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/ad.html.twig
[3]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-ad/amp-ad.md#supported-ad-networks
