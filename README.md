# Associate AWS Things with Eloquent models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/libaro-io/laravel-iot-manager.svg?style=flat-square)](https://packagist.org/packages/libaro-io/laravel-iot-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/libaro-io/laravel-iot-manager/run-tests?label=tests)](https://github.com/libaro-io/laravel-iot-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/libaro-io/laravel-iot-manager/Check%20&%20fix%20styling?label=code%20style)](https://github.com/libaro-io/laravel-iot-manager/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/libaro-io/laravel-iot-manager.svg?style=flat-square)](https://packagist.org/packages/libaro-io/laravel-iot-manager)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require libaro-io/laravel-iot-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-iot-manager-migrations"
php artisan migrate
```

Add following variables to your .env:
```bash
AWS_ACCESS_KEY_ID
AWS_SECRET_ACCESS_KEY
AWS_REGION
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-iot-manager-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-iot-manager-views"
```

## Usage

```php
$ioTManager = new Libaro-io\IoTManager();
echo $ioTManager->echoPhrase('Hello, Libaro-io!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/libaro-io/.github/blob/main/CONTRIBUTING.md) for details.

## Development Flow

Please see [DEVELOPMENT FLOW](https://github.com/libaro-io/.github/blob/main/DEVELOPMENT_FLOW.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kenny Depecker](https://github.com/libaro-io)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
