# Laraca

[![Latest Version on Packagist](https://img.shields.io/packagist/v/handsomebrown/laraca.svg?style=flat-square)](https://packagist.org/packages/handsomebrown/laraca)
[![Total Downloads](https://img.shields.io/packagist/dt/handsomebrown/laraca.svg?style=flat-square)](https://packagist.org/packages/handsomebrown/laraca)
![GitHub Actions](https://github.com/handsomebrown/laraca/actions/workflows/main.yml/badge.svg)

The goal of this package is an alternate _configurable_ Laravel application structure with a few niceties thrown in.

## Installation

You can install the package via composer:

```bash
composer require handsomebrown/laraca
```

## Usage

Meet `arty` ( obviously named after Laravel's `artisan`), the command namespace where you can find Laraca commands that wrap Laravel's Artisan command classes so you can have the application structure you want.

Arty extends existing Laravel Artisan commands so they still have all of the arguments and options artisan commands do.

#### arty:model

```php
artisan arty:model <name>
```

Extends `artisan make:model`

- `--all` doesn't work _yet_
- additional option of `--uuid` will add the HasUuids trait for you

#### arty:cast

```php
artisan arty:cast <name>
```

Extends `artisan make:cast`

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dev@handsomebrown.com instead of using the issue tracker.

## Credits

- [Shavonn Brown](https://github.com/handsomebrown)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.