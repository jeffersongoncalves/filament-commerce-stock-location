<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\StockLocationResource;

class ListStockLocation extends ListRecords
{
    protected static string $resource = StockLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
