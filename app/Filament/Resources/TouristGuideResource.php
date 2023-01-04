<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TouristGuideResource\Pages;
use App\Filament\Resources\TouristGuideResource\RelationManagers;
use App\Models\TouristGuide;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TouristGuideResource extends Resource
{
    protected static ?string $model = TouristGuide::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_num')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('stars_rated')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image_path')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('contact_num'),
                Tables\Columns\TextColumn::make('stars_rated'),
                Tables\Columns\TextColumn::make('image_path'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTouristGuides::route('/'),
            'create' => Pages\CreateTouristGuide::route('/create'),
            'edit' => Pages\EditTouristGuide::route('/{record}/edit'),
        ];
    }    
}
