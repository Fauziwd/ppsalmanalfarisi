<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\SantriTableWidget;
use Filament\Widgets\AccountWidget;

class Dashboard extends BaseDashboard
{
    /**
     * Mengatur label navigasi dashboard.
     */
    protected static ?string $navigationLabel = 'Dashboard';

    /**
     * Mengatur jumlah kolom layout grid dashboard.
     */
    public function getColumns(): int
    {
        return 2; // Layout menggunakan 2 kolom
    }

    /**
     * Menentukan widget yang akan ditampilkan di dashboard.
     */
    public function getWidgets(): array
    {
        return [
            [
                'view' => AccountWidget::class,
                'columnSpan' => 1, // Mengambil satu kolom
            ],
            [
                'view' => SantriTableWidget::class,
                'columnSpan' => 2, // Mengambil dua kolom
            ],
        ];
    }

    /**
     * Mengatur urutan navigasi dashboard.
     */
    public static function getNavigationSort(): ?int
    {
        return -2; // Menjadikan ini prioritas utama.
    }
}
