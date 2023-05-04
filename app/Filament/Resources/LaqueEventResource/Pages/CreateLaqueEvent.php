<?php

namespace App\Filament\Resources\LaqueEventResource\Pages;

use App\Filament\Resources\LaqueEventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLaqueEvent extends CreateRecord
{
    protected static string $resource = LaqueEventResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
