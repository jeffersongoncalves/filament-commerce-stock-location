<?php

use JeffersonGoncalves\Commerce\StockLocation\Models\StockLocation;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages\CreateStockLocation;
use JeffersonGoncalves\FilamentCommerce\StockLocation\Resources\StockLocation\Pages\ListStockLocation;
use Livewire\Livewire;

it('renders the stock-location list page', function () {
    StockLocation::factory()->count(2)->create();

    Livewire::test(ListStockLocation::class)->assertOk();
});

it('creates a stock-location record through the panel', function () {
    Livewire::test(CreateStockLocation::class)
        ->fillForm([
            'name' => 'Main Warehouse',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(StockLocation::query()->count())->toBe(1);
});
