<?php

namespace App\Filament\Resources\UstadzResource\Pages;

use App\Filament\Resources\UstadzResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUstadz extends CreateRecord
{
    protected static string $resource = UstadzResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
