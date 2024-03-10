<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('phone')->name('Mobile Number')->placeholder('+91 1234567890')->required(),
                TextInput::make('email')->name('Email Id')->placeholder('example@example.com')->required(),
                TextInput::make('weblink')->name('Website link')->placeholder('www.example.com')->required(),
                TextInput::make('WorkingHours')->name('Work Timings')->placeholder('Monday-Friday (9am-5pm)')->required(),
                TextInput::make('street')->name('Street')->placeholder('kottara chowki')->required(),
                TextInput::make('location')->name('City with Pincode')->placeholder('575006, mangaluru')->required(),
                Select::make('status')->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('phone'),
                TextColumn::make('email'),
                TextColumn::make('location'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
