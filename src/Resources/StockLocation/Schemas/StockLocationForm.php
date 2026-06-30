<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StockLocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                    ])->columns(2),
            ]);
    }
}
