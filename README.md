# Nova Laravel News Cards

Adds a card to the Nova dashboard with the latest news from Laravel News

## Installation

You can install the card in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require peterbrinck/nova-laravel-news
```

Next up, you must register the card with Nova. This is done in the `card` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function card()
{
    return [
        // ...
        new \PeterBrinck\NovaLaravelNews\NovaLaravelNews(),
    ];
}
```

## Credits

- [Peter Brinck](https://github.com/peterbrinck)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
