<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Supplier;

class SupplierSummaryWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Supplier::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('Supplier Name')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('items_count')
                ->label('Total Items Supplied')
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
                    return $record->items->sum(function ($item) {
                        return $item->price * $item->quantity;
                    });
                }),
            Tables\Columns\TextColumn::make('average_price')
                ->label('Average Price of Items')
                ->getStateUsing(function ($record) {
                    return $record->items->avg('price');
                }),
        ];
    }
}
