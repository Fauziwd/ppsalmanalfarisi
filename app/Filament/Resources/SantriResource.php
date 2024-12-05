<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SantriResource\Pages;
use App\Models\Santri;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class SantriResource extends Resource
{

    protected static ?string $model = Santri::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    /**
     * Define schema untuk form.
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('no')
                            ->label('No')
                            ->numeric()
                            ->required(),

                        Forms\Components\TextInput::make('nis')
                            ->label('NIS')
                            ->numeric()
                            ->required(),

                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Santri')
                            ->required(),

                        Forms\Components\TextInput::make('lulusan')
                            ->label('Lulusan')
                            ->required(),

                        Forms\Components\TextInput::make('asal')
                            ->label('Asal')
                            ->required(),

                        Forms\Components\DatePicker::make('ttl')
                            ->label('Tanggal Lahir')
                            ->required(),

                        Forms\Components\TextInput::make('anak_ke')
                            ->label('Anak Ke')
                            ->numeric()
                            ->required(),

                        Forms\Components\Select::make('status_yatim_piatu')
                            ->label('Status Yatim/Piatu')
                            ->options([
                                '0' => 'Tidak',
                                '1' => 'Ya',
                            ])
                            ->required(),

                        Forms\Components\TextInput::make('bapak')
                            ->label('Nama Bapak')
                            ->required(),

                        Forms\Components\TextInput::make('pekerjaan_bapak')
                            ->label('Pekerjaan Bapak')
                            ->required(),

                        Forms\Components\TextInput::make('no_hp_bapak')
                            ->label('Nomor HP Bapak')
                            ->tel()
                            ->required(),

                        Forms\Components\TextInput::make('ibu')
                            ->label('Nama Ibu')
                            ->required(),

                        Forms\Components\TextInput::make('pekerjaan_ibu')
                            ->label('Pekerjaan Ibu')
                            ->required(),

                        Forms\Components\TextInput::make('no_hp_ibu')
                            ->label('Nomor HP Ibu')
                            ->tel()
                            ->required(),

                        Forms\Components\Textarea::make('alamat')
                            ->label('Alamat')
                            ->required(),

                        Forms\Components\TextInput::make('kelurahan')
                            ->label('Kelurahan')
                            ->required(),

                        Forms\Components\TextInput::make('kecamatan')
                            ->label('Kecamatan')
                            ->required(),

                        Forms\Components\TextInput::make('kota')
                            ->label('Kota')
                            ->required(),

                        Forms\Components\TextInput::make('provinsi')
                            ->label('Provinsi')
                            ->required(),

                        Forms\Components\TextInput::make('kode_pos')
                            ->label('Kode Pos')
                            ->numeric()
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
                Tables\Columns\TextColumn::make('no')
                    ->label('No')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nis')
                    ->label('NIS')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Santri')
                    ->sortable(),

                Tables\Columns\TextColumn::make('lulusan')
                    ->label('Lulusan'),

                Tables\Columns\TextColumn::make('asal')
                    ->label('Asal'),

                Tables\Columns\TextColumn::make('ttl')
                    ->label('Tanggal Lahir')
                    ->date(),

                Tables\Columns\BadgeColumn::make('status_yatim_piatu')
                    ->label('Status Yatim/Piatu')
                    ->colors([
                        'success' => '1', // Hijau jika status "Ya"
                        'danger' => '0',  // Merah jika status "Tidak"
                    ])
                    ->getStateUsing(fn ($record) => $record->status_yatim_piatu == 1 ? 'Ya' : 'Tidak'),
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
            'index' => Pages\ListSantris::route('/'),
            'create' => Pages\CreateSantri::route('/create'),
            'edit' => Pages\EditSantri::route('/{record}/edit'),
        ];
    }
}