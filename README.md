# This is my package vuetify-css

[![Latest Version on Packagist](https://img.shields.io/packagist/v/itstudioat/vuetify-css.svg?style=flat-square)](https://packagist.org/packages/itstudioat/vuetify-css)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/itstudioat/vuetify-css/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/itstudioat/vuetify-css/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/itstudioat/vuetify-css/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/itstudioat/vuetify-css/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/itstudioat/vuetify-css.svg?style=flat-square)](https://packagist.org/packages/itstudioat/vuetify-css)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/vuetify-css.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/vuetify-css)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require itstudioat/vuetify-css
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="vuetify-css-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="vuetify-css-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="vuetify-css-views"
```

## Usage

```php
$vuetifyCss = new Itstudioat\VuetifyCss();
echo $vuetifyCss->echoPhrase('Hello, Itstudioat!');
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

- [Guenther Kron](https://github.com/itstudio.at)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
