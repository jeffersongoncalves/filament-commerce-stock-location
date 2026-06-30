<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\StockLocation\CommerceStockLocationPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceStockLocationPlugin::make(),
            ]);
    }
}
