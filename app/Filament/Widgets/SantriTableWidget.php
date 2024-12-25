<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Santri;
use Illuminate\Database\Eloquent\Builder;

class SantriTableWidget extends BaseWidget
{
    public $searchQuery = '';
    public $selectedSantri = null;

    protected $listeners = ['filterSantri' => 'updateSearchQuery', 'openSantriModal' => 'openSantriModal'];

    public function updateSearchQuery($query)
    {
        $this->searchQuery = $query;
        $this->refreshTable();
    }

    public function openSantriModal($santriId)
    {
        $this->selectedSantri = Santri::find($santriId);
        $this->dispatchBrowserEvent('open-modal');
    }

    protected function getTableQuery(): Builder
    {
        return Santri::query()
            ->when($this->searchQuery, function ($query) {
                $query->where('nama', 'like', '%' . $this->searchQuery . '%')
                      ->orWhere('nis', 'like', '%' . $this->searchQuery . '%')
                      ->orWhere('asal', 'like', '%' . $this->searchQuery . '%');
            });
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('no')
                ->label('No')
                ->sortable()
                ->searchable()
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
            Tables\Columns\TextColumn::make('nis')
                ->label('NIS')
                ->sortable()
                ->searchable()
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
            Tables\Columns\TextColumn::make('nama')
                ->label('Nama Santri')
                ->sortable()
                ->searchable()
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
            Tables\Columns\TextColumn::make('lulusan')
                ->label('Lulusan')
                ->sortable()
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
            Tables\Columns\TextColumn::make('asal')
                ->label('Asal')
                ->sortable()
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
            Tables\Columns\TextColumn::make('ttl')
                ->label('Tanggal Lahir')
                ->date()
                ->sortable()
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
            Tables\Columns\BadgeColumn::make('status_yatim_piatu')
                ->label('Status Yatim/Piatu')
                ->colors([
                    'success' => 'Masih', 
                    'danger' => 'Yatim',
                ])
                ->getStateUsing(fn ($record) => $record->status_yatim_piatu ? 'Masih' : 'Yatim')
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('viewDetails')
                ->label('View Details')
                ->action(function (Santri $record) {
                    $this->openSantriModal($record->id);
                }),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            Tables\Actions\DeleteBulkAction::make(),
        ];
    }

    public function getTableWrapperClasses(): array
    {
        return [
            'w-96', // Lebar tetap 24rem (96 * 0.25rem)
            'h-96', // Tinggi tetap 24rem (96 * 0.25rem)
            'overflow-y-auto', // Tambahkan scroll vertikal
            'overflow-x-hidden', // Sembunyikan scroll horizontal
        ];
    }

    protected function getViewData(): array
    {
        return [
            'selectedSantri' => $this->selectedSantri,
        ];
    }
}