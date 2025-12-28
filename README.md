# Berry HTMX

HTMX extension for [berry/html](https://github.com/atomicptr/berry)

## Usage

Install via composer

```sh
$ composer req bevy/htmx
```

```php
<?php

function renderCounterButton(int $value): Renderable
{
    return button()
        ->hxPost("/counter/{$value + 1}")
        ->hxSwap(HxSwap::OuterHTML)
        ->text("+$value");
}
```

## License

MIT
