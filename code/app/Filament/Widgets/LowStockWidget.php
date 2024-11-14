<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Item;

class LowStockWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Item::where('quantity', '<', 5)
            )
            ->columns([
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
            ])
            ->headerActions([])
            ->filters([])
            ->paginated(5); 
    }

    protected function getHeader(): ?string
    {
        return 'Low Stock Items';
    }

    protected function getSubHeader(): ?string
    {
        return 'Menampilkan daftar barang yang stoknya di bawah 5 unit.'; 
    }
}
