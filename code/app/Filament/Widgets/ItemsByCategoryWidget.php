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
                ->money('USD', true),
        ];
    }

    protected function getTablePagination(): ?int
    {
        return 10; 
    }
}
