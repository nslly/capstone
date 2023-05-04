<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Models\User;
use App\Models\Booking;
use Filament\Pages\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BookingResource;

class EditBooking extends EditRecord
{


    protected static string $resource = BookingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(), 
            Actions\CreateAction::make('send-mail')
            ->url(fn (Booking $booking): string => route('send-email', $booking))
            ->label('Send Email')
            ->color('success')
            ->icon('heroicon-o-bell')
            ->openUrlInNewTab(), 
        ];
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


}
