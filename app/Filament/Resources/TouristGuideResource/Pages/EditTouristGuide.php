<?php

namespace App\Filament\Resources\TouristGuideResource\Pages;

use App\Filament\Resources\TouristGuideResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTouristGuide extends EditRecord
{
    protected static string $resource = TouristGuideResource::class;

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
