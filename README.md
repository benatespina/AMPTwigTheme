# AMP Twig Theme
> AMP oriented theme for Twig template engine

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a3e5fe1a-397d-440c-8331-50aa7e543a3f/mini.png)](https://insight.sensiolabs.com/projects/a3e5fe1a-397d-440c-8331-50aa7e543a3f)
[![Build Status](https://travis-ci.org/benatespina/AMPTwigTheme.svg?branch=master)](https://travis-ci.org/benatespina/AMPTwigTheme)
[![Total Downloads](https://poser.pugx.org/benatespina/amp-twig-theme/downloads)](https://packagist.org/packages/benatespina/amp-twig-theme)
[![Latest Stable Version](https://poser.pugx.org/benatespina/amp-twig-theme/v/stable.svg)](https://packagist.org/packages/benatespina/amp-twig-theme)
[![Latest Unstable Version](https://poser.pugx.org/benatespina/amp-twig-theme/v/unstable.svg)](https://packagist.org/packages/benatespina/amp-twig-theme)

## Requirements
PHP >= 7.0

## Installation
The easiest way to install this bundle is using [Composer][2]
```bash
$ composer require benatespina/amp-twig-theme
```

## Documentation
All the documentation is stored in the `docs` folder.

[Show me the docs!](docs/index.md)

## Tests
You can easily start a simple application based on Symfony framework to test the AMP Twig theme.
```bash
$ cd tests/Application
$ make serve
$ open http://127.0.0.1:8000
```
You can remove cache with the following command:
```bash
$ make cache-warmup
```
And also, depending your needs, you can install the assets with this command:
```bash
$ bin/console assets:install --symlink --relative
```

## Contributing
This library follows Twig coding standards, so pull requests need to execute the Allocine's [TwigCs][1]. In order
to simplify we provide a Composer script that wraps all the commands related with this process.
```bash
$ composer run-script cs
```

There is also a policy for contributing to this bundle. Pull requests must be explained step by step to make the
review process easy in order to accept and merge them.

## Credits
This theme is created by:
>
**@benatespina** - [benatespina@gmail.com](mailto:benatespina@gmail.com)

## Licensing Options
[![License](https://poser.pugx.org/benatespina/amp-twig-theme/license.svg)](https://github.com/benatespina/AMPTwigTheme/blob/master/LICENSE)

[1]: https://github.com/allocine/twigcs 
[2]: http://getcomposer.org
