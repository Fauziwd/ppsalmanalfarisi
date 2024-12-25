<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\SantriTableWidget;
use Filament\Widgets\AccountWidget;

class Dashboard extends BaseDashboard
{
    /**
     * Mengatur jumlah kolom layout grid dashboard.
     */
    protected function getColumns(): int
    {
        return 2; // Layout menggunakan 2 kolom: kiri kecil, kanan besar
    }

    /**
     * Mengatur widget yang akan ditampilkan di dashboard.
     */
    protected function getWidgets(): array
    {
        return [
            // Widget kolom kiri atas
            [
                'widget' => AccountWidget::class,
                'columnSpan' => 1,
                'class' => 'widget-small', // Tambahkan kelas CSS
            ],
            // Widget kolom kiri bawah
            [
                'widget' => SantriTableWidget::class,
                'columnSpan' => 1,
                'class' => 'widget-small', // Tambahkan kelas CSS
            ],
            // Widget kolom kanan besar
            [
                'widget' => SantriTableWidget::class,
                'columnSpan' => 1,
                'class' => 'widget-large', // Tambahkan kelas CSS
            ],
        ];
    }
}
