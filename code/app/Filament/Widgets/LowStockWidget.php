<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Item;

class LowStockWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full'; // Memungkinkan widget untuk mengisi lebar penuh dashboard

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
                    ->money('USD', true), // Menampilkan format uang
            ])
            ->headerActions([])
            ->filters([]) // Tambahkan filter jika diperlukan
            ->pagination(5); // Batasi jumlah baris per halaman jika diperlukan
    }
}
