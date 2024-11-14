<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Item;

class ItemsByCategoryWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Item::query()->with('category');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('category.name')
                ->label('Category')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('name')
                ->label('Item Name')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('quantity')
                ->label('Stock')
                ->sortable(),
            Tables\Columns\TextColumn::make('price')
                ->label('Price')
                ->getStateUsing(function ($record) {
                    return 'Rp. ' . number_format($record->price, 0, ',', '.');
                }),
        ];
    }

    protected function getTablePagination(): ?int
    {
        return 10; 
    }

    protected function getHeader(): ?string
    {
        return 'Items by Category';
    }

    protected function getSubHeader(): ?string
    {
        return 'Menampilkan laporan barang berdasarkan kategori tertentu';
    }
}
