<?php

namespace App\Filament\Resources\UstadzResource\Pages;

use App\Filament\Resources\UstadzResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;

class EditUstadz extends EditRecord
{
    protected static string $resource = UstadzResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list santris setelah edit
        return $this->getResource()::getUrl('index');

    }
}
