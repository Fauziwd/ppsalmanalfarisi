<?php

namespace App\Filament\Resources\SantriResource\Pages;

use App\Filament\Resources\SantriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSantri extends CreateRecord
{
    protected static string $resource = SantriResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list santris setelah submit
        return $this->getResource()::getUrl('index');
    }
}
