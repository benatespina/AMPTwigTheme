# AMP vs non-AMP

Sometimes you need to create two different versions of the same page: the AMP and non-AMP pages. But Google Search
robots need to know this particularity to avoid the content duplication. The answer for this question is really simple,
only we have to add two meta tags, one in each page. You can check more information in the
[AMP project's official page][1].

For that, this library keeps in mind this problematic adding some Twig shortcuts make the process more easy.

In the non-AMP page's head you have to include the `amphtml.html.twig` partial file passing the AMP page url as an
argument. In the following example we are using the Symfony's `url` Twig function, but if you have not got accessible
because you're using Twig as standalone library or something you can simply pass the url in the string format.
```twig
<!doctype html>
<html>
<head>
    {#
        ...
    #}

    {% include '@AMP/partials/amphtml.html.twig' with {
        amphtml_amp_url: url('amp')
    } %}
</head>
<body class="body">
    {#
        ...
    #}
</body>
</html>
```

In the other hand, in the AMP page, you only have to add the url of the non-AMP page. For that you can use two
strategies: extend the `canonical` Twig block or override the `canonical.html.twig` partial file. As explained in the
above paragraph, the following example uses the Symfony's `url` Twig function so, if you're using this library with
Twig as standalone library, you can simply pass the url like a string.

```twig
{% extends '@AMP/app.html.twig' %}

{%- block canonical -%}
    {{ url('page') }}
{%- endblock canonical -%}

{#
    ...
#}
```

```bash
partials
|--------- canonical.html.twig
``` 

- Back to the [index](index.md).

[1]: https://www.ampproject.org/docs/guides/discovery
