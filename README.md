## Laravel Trial Mode

[![Latest Stable Version](https://poser.pugx.org/avviso-si/laravel-trial-mode/v/stable)](https://packagist.org/packages/avviso-si/laravel-trial-mode)
[![Total Downloads](https://poser.pugx.org/avviso-si/laravel-trial-mode/downloads)](https://packagist.org/packages/avviso-si/laravel-trial-mode)

## For Laravel 5.2+

### Instalation

```shell
composer require avviso-si/laravel-trial-mode="1.0"
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
\AvvisoSI\TrialMode\Providers\TrialModeServiceProvider
```

Add the Middleware in middleware array in app/Http/Kernel.php

```php
protected $middleware = [
    ...
    \AvvisoSI\TrialMode\Http\Middleware\CheckForTrialMode::class,
];
```

Add `trial` at your storage/framework/.gitignore 

## Usage

Start trial mode with 14 days

```shell
php artisan trial:set 14
```

End trial mode

```shell
php artisan trial:remove
```

## Customize View

To customize, you just need create a 402.blade.php at app/resources/views/errors/