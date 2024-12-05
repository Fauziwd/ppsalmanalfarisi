<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UstadzResource\Pages;
use App\Models\Ustadz;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class UstadzResource extends Resource
{
    protected static ?string $model = Ustadz::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Define schema untuk form.
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Ustadz')
                            ->required(),

                        Forms\Components\TextInput::make('asal')
                            ->label('Asal')
                            ->required(),

                        Forms\Components\DatePicker::make('ttl')
                            ->label('Tanggal Lahir')
                            ->required(),

                        Forms\Components\TextInput::make('lulusan')
                            ->label('Lulusan')
                            ->required(),

                        Forms\Components\Select::make('status_menikah')
                            ->label('Menikah/Lajang')
                            ->options([
                                '1' => 'Menikah',
                                '0' => 'Lajang',
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('alamat')
                            ->label('Alamat')
                            ->required(),
                    ]),
            ]);
    }

    /**
     * Define schema untuk tabel.
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Ustadz')
                    ->sortable(),
    
                Tables\Columns\TextColumn::make('asal')
                    ->label('Asal'),
    
                Tables\Columns\TextColumn::make('ttl')
                    ->label('Tanggal Lahir')
                    ->date(),
    
                Tables\Columns\TextColumn::make('lulusan')
                    ->label('Lulusan'),
    
                    Tables\Columns\BadgeColumn::make('status_menikah')
                    ->label('Status Menikah')
                    ->colors([
                        'success' => fn ($state): bool => $state === 'Menikah', // Hijau untuk Menikah
                        'gray' => fn ($state): bool => $state === 'Jomblo', // Abu-abu untuk Belum Menikah
                    ])
                    ->getStateUsing(fn ($record) => $record->status_menikah ? 'Menikah' : 'Jomblo'),                
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    

    /**
     * Define relasi.
     */
    public static function getRelations(): array
    {
        return [];
    }

    /**
     * Define halaman untuk resource.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUstadzs::route('/'),
            'create' => Pages\CreateUstadz::route('/create'),
            'edit' => Pages\EditUstadz::route('/{record}/edit'),
        ];
    }
}
