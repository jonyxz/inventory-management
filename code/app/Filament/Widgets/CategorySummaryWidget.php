<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Category;

class CategorySummaryWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Category::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('Category Name')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('items_count')
                ->label('Item Count')
                ->counts('items'),
            Tables\Columns\TextColumn::make('total_stock')
                ->label('Total Stock')
                ->getStateUsing(function ($record) {
                    return $record->items->sum(function ($item) {
                        return $item->quantity;
                    });
                }),
            Tables\Columns\TextColumn::make('total_stock_value')
                ->label('Total Stock Value')
                ->getStateUsing(function ($record) {
                    $totalValue = $record->items->sum(function ($item) {
                        return $item->price * $item->quantity;
                    });
                    return 'Rp. ' . number_format($totalValue, 0, ',', '.');
                }),
            Tables\Columns\TextColumn::make('total_stock_value')
                ->label('Total Stock Value')
                ->getStateUsing(function ($record) {
                    $totalValue = $record->items->sum(function ($item) {
                        return $item->price * $item->quantity;
                    });
                    return 'Rp. ' . number_format($totalValue, 0, ',', '.');
                }),
        ];
    }

    protected function getHeader(): ?string
    {
        return 'Category Summary';
    }

    protected function getSubHeader(): ?string
    {
        return 'Menampilkan ringkasan per kategori, termasuk jumlah barang per kategori, total nilai stok tiap kategori, dan rata-rata harga barang dalam kategori tersebut';
    }
}
