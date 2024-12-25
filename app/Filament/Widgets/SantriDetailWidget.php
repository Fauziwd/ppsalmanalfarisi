<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Santri;

class SantriDetailWidget extends Widget
{
    public $santri;

    protected $listeners = ['showSantriDetail'];

    public function showSantriDetail($santriId)
    {
        $this->santri = Santri::find($santriId);
    }

    protected static string $view = 'filament.widgets.santri-detail-widget';
}