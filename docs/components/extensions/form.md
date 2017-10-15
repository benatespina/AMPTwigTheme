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

Extension points:
* form_content
* form_response_success
* form_response_submitting
* form_response_error

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

## Custom form components
The form's `form_content` block is very open so, to facilitate the DOM implementation inside this scope
this library provides some custom components that abstract from AMP restrictions.

### form_error
A component that displays the form error associated error.

[Source code][3]

| Argument                   | Type        | Required | Default value | More information   | 
|:---------------------------|:-----------:|:--------:|:-------------:|:-------------------|
| form_error_class           | string      | false    |               |                    |
| form_error_content         | string|html | true     |               |                    |

```twig
{% include '@AMP/components/form_error.html.twig' with {
    form_error_content: 'Error! Thanks for trying the <code>amp-form</code> demo'
} %}
```

### form_fieldset
A component that displays the form fieldset.

[Source code][4]

| Argument                   | Type        | Required | Default value | More information   | 
|:---------------------------|:-----------:|:--------:|:-------------:|:-------------------|
| form_fieldset_class        | string      | false    |               |                    |
| form_fieldset_disabled     | boolean     | false    | false         |                    |
| form_fieldset_form         | string      | false    |               |                    |
| form_fieldset_legend       | string      | false    |               |                    |
| form_fieldset_name         | string      | false    |               |                    |

Extension points:
* form_fieldset_content

```twig
{% embed '@AMP/components/form_fieldset.html.twig' with {
    form_fieldset_legend: 'Personal data'
} %}
    {%- block form_fieldset_content -%}
        {#
            Your custom form DOM
        #}
    {%- endblock form_fieldset_content -%}
{% endembed %}
```

### form_group
A component that displays a form group composed by "form_label", "form_input" and "form_error".

[Source code][5]

| Argument                 | Type                | Required | Default value | More information                                   | 
|:-------------------------|:-------------------:|:--------:|:-------------:|:---------------------------------------------------|
| form_group_class         | string              | false    |               |                                                    |
| form_group_disabled      | boolean             | false    | false         |                                                    |
| form_group_error_content | string              | false    |               |                                                    |
| form_group_id            | string              | true     |               |                                                    |
| form_group_input_class   | string              | false    |               |                                                    |
| form_group_label_class   | string              | false    |               |                                                    |
| form_group_label_content | string|html         | false    |               |                                                    |
| form_group_name          | string              | false    | form_group_id |                                                    |
| form_group_pattern       | string              | false    |               |                                                    |
| form_select_options      | array (name, value) | true     |               | required only if the "form_group_type" is "select" |
| form_group_placeholder   | string              | false    |               |                                                    |
| form_group_required      | boolean             | false    | false         |                                                    |
| form_group_type          | string              | false    | text          |                                                    |
| form_group_value         | string              | false    |               |                                                    |

```twig
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
```

### form_input
A component that displays the form input.

[Source code][6]

| Argument                 | Type                | Required | Default value | More information | 
|:-------------------------|:-------------------:|:--------:|:-------------:|:-----------------|
| form_input_class         | string              | false    |               |                  |
| form_input_disabled      | boolean             | false    | false         |                  |
| form_input_id            | string              | true     |               |                  |
| form_input_name          | string              | false    | form_input_id |                  |
| form_input_pattern       | string              | false    |               |                  |
| form_input_placeholder   | string              | false    |               |                  |
| form_input_required      | boolean             | false    | false         |                  |
| form_input_type          | string              | false    | text          |                  |

```twig
{% include '@AMP/components/form_input.html.twig' with {
    form_input_id: 'name',
    form_input_placeholder: 'Type the name...',
    form_input_required: true
} %}
```

### form_label
A component that displays the form label.

[Source code][7]

| Argument              | Type           | Required | Default value | More information | 
|:----------------------|:--------------:|:--------:|:-------------:|:-----------------|
| form_label_class      | string         | false    |               |                  |
| form_label_content    | string|html    | true     |               |                  |
| form_label_for        | string         | false    |               |                  |
| form_label_required   | boolean        | false    | false         |                  |

```twig
{% include '@AMP/components/form_input.html.twig' with {
    form_label_content: 'The name',
    form_label_for: 'name',
    form_label_required: true
} %}
```

### form_select
A component that displays the form select.

[Source code][8]

| Argument                 | Type                | Required | Default value  | More information | 
|:-------------------------|:-------------------:|:--------:|:--------------:|:-----------------|
| form_select_class        | string              | false    |                |                  |
| form_select_disabled     | boolean             | false    | false          |                  |
| form_select_id           | string              | true     |                |                  |
| form_select_name         | string              | false    | form_select_id |                  |
| form_select_options      | array (name, value) | true     |                |                  |
| form_select_placeholder  | string              | false    |                |                  |
| form_select_required     | boolean             | false    | false          |                  |
| form_select_value        | string              | false    |                |                  |

```twig
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
```

### form_submit
A component that displays the form submit button.

[Source code][9]

| Argument                 | Type                | Required | Default value  | More information | 
|:-------------------------|:-------------------:|:--------:|:--------------:|:-----------------|
| form_submit_class        | string              | false    |                |                  |
| form_submit_disabled     | boolean             | false    | false          |                  |
| form_submit_title        | string              | true     |                |                  |

```twig
{% include '@AMP/components/form_submit.html.twig' with {
    form_submit_title: 'Send'
} %}
```

### form_textarea
A component that displays the form textarea.

[Source code][10]

| Argument                  | Type                | Required | Default value    | More information | 
|:--------------------------|:-------------------:|:--------:|:----------------:|:-----------------|
| form_textarea_class       | string              | false    |                  |                  |
| form_textarea_disabled    | boolean             | false    | false            |                  |
| form_textarea_id          | string              | true     |                  |                  |
| form_textarea_name        | string              | false    | form_textarea_id |                  |
| form_textarea_placeholder | string              | false    |                  |                  |
| form_textarea_required    | boolean             | false    | false            |                  |

```twig
{% include '@AMP/components/form_textarea.html.twig' with {
    form_textarea_id: 'comment',
    form_textarea_placeholder: 'Type the comment...',
    form_textarea_required: true,
} %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-form/amp-form.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/form.html.twig
[3]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_error.html.twig
[4]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_fieldset.html.twig
[5]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_group.html.twig
[6]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_input.html.twig
[7]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_label.html.twig
[8]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_select.html.twig
[9]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_submit.html.twig
[10]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/form_textarea.html.twig
