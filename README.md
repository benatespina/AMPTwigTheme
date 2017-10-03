# AMP Twig Theme
> AMP oriented theme for Twig template engine

## Requirements
PHP >= 7.0

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
