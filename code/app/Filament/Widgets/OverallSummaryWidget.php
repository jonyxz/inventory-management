<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class OverallSummaryWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalItems = Item::count();
        $totalStock = Item::sum(DB::raw('quantity'));
        $totalStockValue = Item::sum(DB::raw('price * quantity'));
        $totalCategories = Category::count();
        $totalSuppliers = Supplier::count();

        return [
            Stat::make('Total Items', $totalItems)
                ->description('Total number of items in inventory')
                ->icon('heroicon-o-cube'),

            Stat::make('Total Stock Value', number_format($totalStock))
                ->description('Total all items in stock')
                ->icon('heroicon-o-cube'),
                
            Stat::make('Total Stock Value', number_format($totalStockValue, 2))
                ->description('Total value of all items in stock')
                ->icon('heroicon-o-currency-dollar'),

            Stat::make('Total Categories', $totalCategories)
                ->description('Number of item categories')
                ->icon('heroicon-o-tag'),

            Stat::make('Total Suppliers', $totalSuppliers)
                ->description('Number of suppliers')
                ->icon('heroicon-o-truck'),
        ];
    }
}
