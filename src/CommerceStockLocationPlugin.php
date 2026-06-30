<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Concerns\HasCommerceStockLocationPluginConfig;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\StockLocationResource;

class CommerceStockLocationPlugin implements Plugin
{
    use HasCommerceStockLocationPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-stock-location';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'stock-location' => StockLocationResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
