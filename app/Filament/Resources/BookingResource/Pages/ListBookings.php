<?php
namespace App\Http\Livewire;
namespace App\Filament\Resources\BookingResource\Pages;
use Filament\Notifications\Notification; 
use App\Filament\Resources\BookingResource;
use Livewire\Component;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Booking;



class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getActions(): array
    {
        // }
        return [
            Actions\CreateAction::make(),
        ];
    }


}
