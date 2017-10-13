# Getting Started

Firstly you need to create your amp page Twig template in your templates project directory and this page must be
extend the library's root template named `app.html.twig`.

## Twig blocks
After that, there are some block that can be extend easily keeping safe the AMP compliance.
Take a look the following example.
```twig
{# templates #}

{% extends '@AMP/app.html.twig' %}

{%- block title -%}
    {#
        Put the AMP page title.
    #}
{%- endblock title -%}

{%- block description -%}
    {#
        Put the AMP page description.
    #}
{%- endblock description -%}

{%- block microdata -%}
    {#
        This block is reserved to insert all the code
        related with the microdata information.
    #}
{%- endblock microdata -%}

{%- block fonts -%}
    {#
        The custom js code is forbidden in the AMP pages;
        only js related with the extension components can
        be added. However, with fonts does not exist this
        limitation and you can include external links
        like you're doing in the non-AMP pages.
    #}
{%- endblock fonts -%}

{%- block canonical -%}
    {#
        Put the associate non-AMP page absolute url.
    #}
{%- endblock canonical -%}

{%- block styles -%}
    {#
        Insert inline your favourite CSS code.
    #}
{%- endblock styles -%}

{% set extensions_enabled = [
    {#
        If you want to use any extension component you need to include
        its associated script. Twig variable simplifies this process
        only passing the components' names. For example:
        
        'amp-iframe',
        'amp-form',
        'amp-youtube'
    #}
] %}

{%- block sidebar -%}
    {#
        One of the AMP's restrictions, is that the sidebar component
        must be a direct child of the <body> tag. This restriction
        forces to make a rigid DOM so, we can enforce with this block
        in the base Twig template.
        
        You can include the sidebar extension component or any other
        element that you consider useful for your design. Obviously,
        you can also, leave it empty.
    #}
{%- endblock sidebar -%}

{%- block content -%}
    {#
        Here you can put the main content of the page.
    #}
{%- endblock content -%}

{%- block analytics -%}
    {#
        This block is reserved to insert all the code
        related with the different analytics strategies.
    #}
{%- endblock analytics -%}
```
## Twig partials
To improve the extensions points, besides adding previously explained blocks the library exposes some partials becoming
the override process more interesting.
Instead of to add the blocks and override you can create the partial file keeping the same directory structure in your
project templates directory. At this moment the following files are overridable:
```bash
partials/
|--------- canonical.html.twig
|--------- description.html.twig
|--------- fonts.html.twig
|--------- microdata.html.twig
|--------- styles.html.twig
|--------- title.html.twig
``` 
> There a few more partials but we discourage its overwriting because they may appear some uncontrolled side-effects.

- For more information about canonical and amphtml tags check "[AMP vs non-AMP](amp_vs_non_amp.md)" chapter.
- Back to the [index](index.md).
