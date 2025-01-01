<?php

namespace App\Filament\Widgets;

use App\Models\Santri;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class SantriTableWidget extends BaseWidget
{
    public $searchQuery = '';
    public $selectedSantri = null; // Properti untuk menyimpan detail santri yang dipilih

    protected $listeners = ['filterSantri' => 'updateSearchQuery'];

    public function updateSearchQuery($query)
    {
        $this->searchQuery = $query;
        $this->refreshTable();
    }

    protected function refreshTable()
    {
        $this->emit('refreshTable');
    }

    protected function getViewData(): array
    {
        return [
            'santriList' => Santri::all(), // Data semua santri
            'selectedSantri' => $this->selectedSantri, // Santri yang dipilih
        ];
    }

    public function selectSantri($santriId): void
    {
        $this->selectedSantri = Santri::find($santriId);
    }
    
    protected function getTableQuery(): Builder
    {
        return Santri::query()
            ->when($this->searchQuery, function ($query) {
                $query->where('nama', 'like', "%{$this->searchQuery}%")
                    ->orWhere('nis', 'like', "%{$this->searchQuery}%")
                    ->orWhere('asal', 'like', "%{$this->searchQuery}%");
            });
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('no')
                ->label('No')
                ->sortable()
                ->searchable()
                ->action(fn(Santri $record) => $this->showSantriDetail($record)),

            Tables\Columns\TextColumn::make('nis')
                ->label('NIS')
                ->sortable()
                ->searchable()
                ->action(fn(Santri $record) => $this->showSantriDetail($record)),

            Tables\Columns\TextColumn::make('nama')
                ->label('Nama Santri')
                ->sortable()
                ->searchable()
                ->action(fn(Santri $record) => $this->showSantriDetail($record)),

            Tables\Columns\TextColumn::make('lulusan')
                ->label('Lulusan')
                ->sortable(),

            Tables\Columns\TextColumn::make('asal')
                ->label('Asal')
                ->sortable(),

            Tables\Columns\TextColumn::make('ttl')
                ->label('Tanggal Lahir')
                ->date()
                ->sortable(),

            Tables\Columns\BadgeColumn::make('status_yatim_piatu')
                ->label('Status Yatim/Piatu')
                ->colors([
                    'success' => 'Masih',
                    'danger' => 'Yatim',
                ])
                ->getStateUsing(fn($record) => $record->status_yatim_piatu ? 'Masih' : 'Yatim'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('viewDetails')
                ->label('View Details')
                ->action(fn(Santri $record) => $this->showSantriDetail($record)),
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
            'w-full',
            'overflow-y-auto',
            'overflow-x-hidden',
        ];
    }

    private function showSantriDetail(Santri $record)
    {
        $this->selectedSantri = $record; // Menyimpan data santri yang dipilih
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('filament.widgets.santri-table-widget', [
            'selectedSantri' => $this->selectedSantri, // Mengirim data detail santri ke view
        ]);
    }
}
