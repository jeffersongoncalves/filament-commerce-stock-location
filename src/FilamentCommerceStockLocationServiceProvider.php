<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceStockLocationServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-stock-location';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
