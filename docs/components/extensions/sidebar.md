# sidebar
> A sidebar provides a way to display meta content intended for temporary access
> (navigation links, buttons, menus, etc.). The sidebar can be revealed by a button
> tap while the main content remains visually underneath.

[AMP project reference][1]

[Source code][2]

| Argument                             | Type       | Required | Default value | More information                             | 
|:-------------------------------------|:----------:|:--------:|:-------------:|:---------------------------------------------|
| sidebar_class                        | string     | false    |               |                                              |
| sidebar_data_close_button_aria_label | string     | false    |               |                                              |
| sidebar_height                       | int        | false    |               |                                              |
| sidebar_heights                      | string     | false    |               | only matters when the layout is "responsive" |
| sidebar_id                           | string     | false    | sidebar       |                                              |
| sidebar_media                        | string     | false    |               |                                              |
| sidebar_noloading                    | string     | false    |               | only it can be "noloading"                   |
| sidebar_on                           | string     | false    |               |                                              |
| sidebar_open                         | string     | false    |               |                                              |
| sidebar_side                         | string     | false    | left          | also, it can be "right"                      |
| sidebar_sizes                        | string     | false    |               |                                              |
| sidebar_toolbar_media                | string     | false    |               |                                              |
| sidebar_toolbar_target               | string     | false    |               |                                              |
| sidebar_width                        | int        | false    |               |                                              |

Extension points:
* sidebar_fallback_content
* sidebar_placeholder_content
* sidebar_content
* sidebar_toolbar

## Example

```twig
{% set extensions_enabled = [
    {# ... #}

    'amp-sidebar',

    {# ... #}
] %}

{% embed '@AMP/components/extensions/sidebar.html.twig' %}
    {% block sidebar_content %}
        {#
            Put here your DOM related with the sidebar content.
        #}
    {% endblock sidebar_content %}
{% endembed %}
```

## Custom sidebar components
The use of JavaScript is not allowed in the AMP pages so, the menu implementations are very concrete. One of these
implementations is the sidebar menu; this library keeping this in mind, provides a built-in sidebar menu component
on top of AMP sidebar extension component.

### sidebar_menu
A component that displays the sidebar menu with multiple extension block points.

[Source code][3]

Extension points:
* sidebar_menu_content

```twig
{% embed '@AMP/components/sidebar_menu.html.twig' %}
    {% block sidebar_menu_content %}
        <ul>
            <li>Nav item 1</li>
            <li>Nav item 2</li>
            <li>Nav item 3</li>
            <li>Nav item 4</li>
            <li>Nav item 5</li>
            <li>Nav item 6</li>
        </ul>
    {% endblock sidebar_menu_content %}
{% endembed %}
```

- Back to the [index](../../index.md).

[1]: https://github.com/ampproject/amphtml/blob/master/extensions/amp-sidebar/amp-sidebar.md
[2]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/extensions/sidebar.html.twig
[3]: https://github.com/benatespina/AMPTwigTheme/blob/master/templates/components/sidebar_menu.html.twig
