# form
> Allow usage of form and input tags

[AMP project reference][1]

[Source code][2]

| Argument                         | Type       | Required | Default value | More information                                                           | 
|:---------------------------------|:----------:|:--------:|:-------------:|:---------------------------------------------------------------------------|
| form_action                      | string     | true     |               |                                                                            |
| form_class                       | string     | false    |               |                                                                            |
| form_custom_validation_reporting | string     | false    |               | only it can be "show-first-on-submit", "show-all-on-submit" or "as-you-go" |
| form_id                          | string     | false    |               |                                                                            |
| form_is_ajax                     | boolean    | false    | true          |                                                                            |
| form_method                      | string     | true     |               | only it can be "GET" or "POST"                                             |
| form_on                          | array      | false    | []            | key/value with event/target-element, event only can be "submit", "submit-success", "submit-error", "valid" or "invalid" |
| form_target                      | string     | true     |               | only it can be "_blank" or "_top"                                          |

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-form',

    {# ... #}
] %}

{% embed '@AMP/components/extensions/form.html.twig' with {
    form_action: 'https://ampbyexample.com/components/amp-form/submit-form-input-text-xhr',
    form_method: 'post',
    form_target: '_top',
    form_custom_validation_reporting: 'show-all-on-submit'
} %}
    {%- block form_content -%}
        {% embed '@AMP/components/form_fieldset.html.twig' with {
            form_fieldset_legend: 'Personal data'
        } %}
            {%- block form_fieldset_content -%}
                {% include '@AMP/components/form_group.html.twig' with {
                    form_group_id: 'show-all-on-submit-name',
                    form_group_name: 'name',
                    form_group_placeholder: 'Name...',
                    form_group_required: true,
                    form_group_type: 'text',
                    form_group_validations: {
                        'valueMissing': ''
                    }
                } %}
                {% include '@AMP/components/form_group.html.twig' with {
                    form_group_id: 'show-all-on-submit-surnames',
                    form_group_name: 'surnames',
                    form_group_pattern: '\\w+\\s\\w+',
                    form_group_placeholder: 'Surnames...',
                    form_group_required: true,
                    form_group_type: 'text',
                    form_group_validations: {
                        'valueMissing': '',
                        'patternMismatch': 'This is custom validation message'
                    }
                } %}
                {% include '@AMP/components/form_group.html.twig' with {
                    form_group_id: 'show-all-on-submit-email',
                    form_group_name: 'email',
                    form_group_placeholder: 'Email...',
                    form_group_required: true,
                    form_group_type: 'email',
                    form_group_validations: {
                        'valueMissing': '',
                        'typeMismatch': 'The email must have the @ symbol'
                    }
                } %}
                {% include '@AMP/components/form_group.html.twig' with {
                    form_group_id: 'show-all-on-submit-city',
                    form_group_options: [{
                        name: 'Bilbao',
                        value: 'bilbao'
                    }, {
                        name: 'Donostia',
                        value: 'donostia'
                    }, {
                        name: 'Gssteiz',
                        value: 'gasteiz'
                    }, {
                        name: 'Iruñea',
                        value: 'irunea'
                    }, {
                        name: 'Baiona',
                        value: 'baiona'
                    }, {
                        name: 'Donibane Garazi',
                        value: 'donibane-garazi'
                    }, {
                        name: 'Maule',
                        value: 'maule'
                    }],
                    form_group_placeholder: 'City...',
                    form_group_required: true,
                    form_group_type: 'select',
                    form_group_validations: {
                        'valueMissing': ''
                    }
                } %}
            {%- endblock form_fieldset_content -%}
        {% endembed %}
        {% include '@AMP/components/form_group.html.twig' with {
            form_group_id: 'show-all-on-submit-comment',
            form_group_placeholder: 'Comment...',
            form_group_required: true,
            form_group_type: 'textarea',
            form_group_validations: {
                'valueMissing': '',
            }
        } %}
        {% include '@AMP/components/form_submit.html.twig' with {
            form_submit_title: 'Send'
        } %}
    {%- endblock form_content -%}
    {%- block form_response_success -%}
        {% embed '@AMP/components/extensions/mustache.html.twig' %}
            {%- block mustache_content -%}
                {{ 'Success! Thanks {{name}} for trying the <code>amp-form</code> demo!
                Try to insert the word "error" as a name input in the form to see how
                <code>amp-form</code> handles errors.' }}
            {%- endblock mustache_content -%}
        {% endembed %}
    {%- endblock form_response_success -%}
    {%- block form_response_error -%}
        {% embed '@AMP/components/extensions/mustache.html.twig' %}
            {%- block mustache_content -%}
                {{ 'Error! Thanks {{name}} for trying the <code>amp-form</code> demo
                with an error response.' }}
            {%- endblock mustache_content -%}
        {% endembed %}
    {%- endblock form_response_error -%}
{% endembed %}
```
[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-form/amp-form.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/form.html.twig
