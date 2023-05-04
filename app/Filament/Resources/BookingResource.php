<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingResource\RelationManagers;


class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationGroup = 'Transaction';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('customer_email')->required(),
                    Forms\Components\Toggle::make('status_of_book')
                        ->required(),
                    Forms\Components\Toggle::make('email_sent')
                        ->required(),
                    TextInput::make('res_date')->required(),
                    TextInput::make('contact_num')->required(),
                    TextInput::make('package')->required(),
                    TextInput::make('tour_guide')->required(),
                    TextInput::make('avail_price')->required(),
                    TextInput::make('added_services')->required(),
                    TextInput::make('customer_avail')->type('number')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('customer_email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\IconColumn::make('status_of_book')
                    ->boolean(),
                Tables\Columns\IconColumn::make('email_sent')
                    ->boolean(),
                TextColumn::make('customer_avail')->sortable(),
                TextColumn::make('contact_num'),
                TextColumn::make('tour_guide')->sortable(),
                TextColumn::make('package')->sortable(),
                TextColumn::make('avail_price')->sortable(),
                TextColumn::make('added_services')->sortable(),
                TextColumn::make('res_date')->sortable(),
                TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i:s')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('updated_at')
                    ->dateTime('Y-m-d H:i:s')
                    ->sortable()
                    ->searchable(),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }    
}
