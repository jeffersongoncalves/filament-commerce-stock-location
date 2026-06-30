<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\StockLocation\Models\StockLocation;
use JeffersonGoncalves\FilamentCommerce\StockLocation\CommerceStockLocationPlugin;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages\CreateStockLocation;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages\EditStockLocation;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages\ListStockLocation;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Schemas\StockLocationForm;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Tables\StockLocationTable;

class StockLocationResource extends Resource
{
    protected static ?string $model = StockLocation::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceStockLocationPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-stock-location.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return StockLocationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StockLocationTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStockLocation::route('/'),
            'create' => CreateStockLocation::route('/create'),
            'edit' => EditStockLocation::route('/{record}/edit'),
        ];
    }
}
