# sticky-ad
>Provides a way to fix an ad to the bottom of a page. The sticky-ad serves as a container, with the ad as its child.

[AMP project reference][1]

[Source code][2]

Extension points:
* sticky_ad_content

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-ad',
    'amp-sticky-ad',

    {# ... #}
] %}

{% embed '@AMP/components/extensions/sticky_ad.html.twig' %}
    {%- block sticky_ad_content -%}
        {% include '@AMP/components/extensions/ad.html.twig' with {
            ad_type: 'doubleclick',
            ad_type_data_attributes: {
                'data-slot': '/35096353/amptesting/formats/sticky'
            },
            ad_height: 50,
            ad_width: 320
        } %}
    {%- endblock sticky_ad_content -%}
{% endembed %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-sticky-ad/amp-sticky-ad.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/sticky_ad.html.twig
[3]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-sticky-ad/amp-sticky-ad.md#supported-ad-networks
