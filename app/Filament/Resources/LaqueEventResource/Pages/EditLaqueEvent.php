<?php

namespace App\Filament\Resources\LaqueEventResource\Pages;

use App\Filament\Resources\LaqueEventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaqueEvent extends EditRecord
{
    protected static string $resource = LaqueEventResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
