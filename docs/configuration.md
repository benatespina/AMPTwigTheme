# Configuration

This Twig theme aims to simplify the implementation of the [AMP][1] pages in your websites.
If your are familiar with AMP, you've already found out that its markup and its design decisions are very closed. So,
exploiting the Twig potential, this theme exposes a robust API to interact with AMP environment.

To make work the theme, you have to add the Twig path to the directory that the library is.

In the Symfony context:
```yaml
# config/packages/twig.yaml         if you're using the Symfony Flex
# app/config/config.yaml            if you're using the Symfony Standard

twig:
    paths:
        '%kernel.root_dir%/../templates': ~
        '%kernel.project_dir%/vendor/benatespina/amp-twig-theme/templates': AMP
```

In the standalone context:
```php
<?php

$rootProjectDir = '/path/to/project/dir';

require_once __DIR__ . $rootProjectDir . '/vendor/autoload.php';

$loader = new \Twig_Loader_Filesystem();

$loader->addPath(__DIR__ . $rootProjectDir . '/vendor/benatespina/amp-twig-theme/templates', 'AMP');
```

And that's all, the library is ready to use!

[1]: https://www.ampproject.org/
