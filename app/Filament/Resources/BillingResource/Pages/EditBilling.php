<?php

namespace App\Filament\Resources\BillingResource\Pages;

use App\Models\Booking;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BillingResource;

class EditBilling extends EditRecord
{
    protected static string $resource = BillingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\CreateAction::make('receipt')
            ->url(fn (Booking $booking): string => route('send-email-receipt', $booking))
            ->label('Send Receipt')
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
