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
            Stat::make('Total Stock Value', 'Rp. ' . number_format($totalStockValue, 2, ',', '.'))
                ->description('Total value of all items in stock'),
            Stat::make('Average Price', 'Rp. ' . number_format($averagePrice, 2, ',', '.'))
                ->description('Average price of items'),
        ];
    }

    protected function getHeader(): ?string
    {
        return 'Stock Summary';
    }

    protected function getSubHeader(): ?string
    {
        return 'Menampilkan ringkasan stok barang termasuk stok total, total nilai harga stok dan rata-rata harga barang.';
    }
}
