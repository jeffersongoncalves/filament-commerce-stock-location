<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\StockLocationResource;

class EditStockLocation extends EditRecord
{
    protected static string $resource = StockLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
