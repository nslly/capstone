<?php

namespace App\Filament\Resources\LaqueEventResource\Pages;

use App\Filament\Resources\LaqueEventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaqueEvents extends ListRecords
{
    protected static string $resource = LaqueEventResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
