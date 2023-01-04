<?php

namespace App\Filament\Resources\TouristGuideResource\Pages;

use App\Filament\Resources\TouristGuideResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTouristGuides extends ListRecords
{
    protected static string $resource = TouristGuideResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
