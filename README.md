# This is my package laravel-factuursturen-api

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deinte/laravel-factuursturen-api.svg?style=flat-square)](https://packagist.org/packages/deinte/laravel-factuursturen-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/deinte/laravel-factuursturen-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/deinte/laravel-factuursturen-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/deinte/laravel-factuursturen-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/deinte/laravel-factuursturen-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/deinte/laravel-factuursturen-api.svg?style=flat-square)](https://packagist.org/packages/deinte/laravel-factuursturen-api)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

## Installation

You can install the package via composer:

```bash
composer require deinte/laravel-factuursturen-api
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-factuursturen-api-config"
```

This is the contents of the published config file:

```php
return [

    /**
     * The base url of the FactuurSturen API.
     */
    'base_url' => env('FACTUURSTUREN_API_BASE_URL'),

    /**
     * The username of your FactuurSturen-account.
     */
    'username' => env('FACTUURSTUREN_API_USERNAME'),

    /**
     * The API token used to authenticate with the FactuurSturen API.
     */
    'api_token' => env('FACTUURSTUREN_API_KEY'),

];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dante Schrauwen](https://github.com/deinte)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
