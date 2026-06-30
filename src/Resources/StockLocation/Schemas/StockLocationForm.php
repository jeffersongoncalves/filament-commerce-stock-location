<?php

namespace JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class StockLocationForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                    ])->columns(2),
            ]);
    }
}
