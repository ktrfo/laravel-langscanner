# laravel-langscanner

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ktrfo/laravel-langscanner.svg?style=flat-square)](https://packagist.org/packages/ktrfo/laravel-langscanner)
[![Total Downloads](https://img.shields.io/packagist/dt/ktrfo/laravel-langscanner.svg?style=flat-square)](https://packagist.org/packages/ktrfo/laravel-langscanner)

This package scans your project for missing translation keys and then writes them into individual json files for you to fill in.

## Installation

You can install the package via composer:

```bash
composer require ktrfo/laravel-langscanner
```

## Usage

Scan your project for missing translations:

```
// outputs and writes translations for the specified language (dutch)
php artisan langscanner nl

// outputs and writes translations in the existing {language}.json files
php artisan langscanner
```

## Credits

This package is based on [joedixon/laravel-translation](https://github.com/joedixon/laravel-translation) and [themsaid/laravel-langman-gui](https://github.com/themsaid/laravel-langman-gui)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
