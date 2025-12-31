# Berry HTMX

HTMX extension for [berry/html](https://github.com/atomicptr/berry)

## Usage

Install via composer

```sh
$ composer req berry/htmx
```

```php
<?php

function renderCounterButton(int $value): Element
{
    return button()
        ->hxPost("/counter/{$value + 1}")
        ->hxSwap(HxSwap::OuterHTML)
        ->text("+$value");
}
```

### PHPStan

If you're using [phpstan](https://phpstan.org/) (you should), you will also need to install
[phpstan/extension-installer](https://packagist.org/packages/phpstan/extension-installer) so that
the extension methods are automatically detected.

## License

MIT
