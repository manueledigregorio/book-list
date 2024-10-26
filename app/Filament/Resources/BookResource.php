<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Doctrine\DBAL\Schema\Column;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Libro';
    protected static ?string $pluralModelLabel = 'Libri';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titolo')
                    ->required(),
                TextInput::make('author')
                    ->label('Autore')
                    ->required(),
                DatePicker::make('published_date')
                    ->label('Data di Pubblicazione')
                    ->required(),
                TextInput::make('genre')
                    ->label('Genere'),
                Select::make('categories')
                    ->label('Categorie')
                    ->relationship('categories', 'name') // Indica la relazione e il campo da visualizzare
                    ->multiple() // Permette di selezionare più categorie
                    ->required(), // Se desiderato
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('author')->searchable(),
                Tables\Columns\TextColumn::make('published_date')->date(),
                Tables\Columns\TextColumn::make('genre'),
                Tables\Columns\TextColumn::make('categories.name')
                    ->label('Categorie') // Nome della colonna
                    ->getStateUsing(fn($record) => $record->categories->pluck('name')->implode(', ')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
