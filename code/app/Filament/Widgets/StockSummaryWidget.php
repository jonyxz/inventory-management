<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class StockSummaryWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalStock = Item::sum('quantity');
        $totalStockValue = Item::sum(DB::raw('price * quantity'));
        $averagePrice = Item::avg('price');

        return [
            Stat::make('Total Stock', $totalStock),
            Stat::make('Total Stock Value', number_format($totalStockValue, 2)),
            Stat::make('Average Price', number_format($averagePrice, 2)),
        ];
    }
}
