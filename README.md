<p align="center"><img src="art/banner.png" alt="Stock Location" width="100%"></p>

# Stock Location

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-commerce-stock-location.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-commerce-stock-location) [![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-commerce-stock-location.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-commerce-stock-location) [![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-commerce-stock-location.svg?style=flat-square)](LICENSE.md)

Filament v5 admin resources for the Laravel Commerce stock-location module.

## Installation

```bash
composer require jeffersongoncalves/filament-commerce-stock-location
```

## Usage

The plugin is auto-discovered. Register it on a Filament panel:

```php
use JeffersonGoncalves\\FilamentCommerce\\Umbrella\\CommercePanelPlugin;

public function panel(Panel $panel): Panel
{
    return $panel->plugin(CommercePanelPlugin::make());
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
