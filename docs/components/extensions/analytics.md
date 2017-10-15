# analytics
>Capture analytics data from an AMP document.

[AMP project reference][1]

[Source code][2]

| Argument                               | Type     | Required | Default value   | More information | 
|:---------------------------------------|:--------:|:--------:|:---------------:|:-----------------|
| analytics_config                       | string   | false    |                 |                  |
| analytics_data_consent_notification_id | string   | false    |                 |                  |
| analytics_data_credentials             | string   | false    |                 |                  |
| analytics_id                           | string   | false    |                 |                  |
| analytics_type                         | string   | false    | googleanalytics |                  |

Extension points:
* analytics_json_content
>Please check the [this link][3] to implement correctly the content

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-analytics',

    {# ... #}
] %}

{% include '@AMP/components/extensions/analytics.html.twig' with {
    analytics_json_content: {
        "vars": {
            "account": "UA-XXXXX-Y"
        },
        "triggers": {
            "trackPageview": {
                "on": "visible",
                "request": "pageview"
            }
        }
    }
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-gist/amp-gist.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/gist.html.twig
[3]: https://developers.google.com/analytics/devguides/collection/amp-analytics/
