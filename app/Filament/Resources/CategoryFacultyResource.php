<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryFacultyResource\Pages;
use App\Filament\Resources\CategoryFacultyResource\RelationManagers;
use App\Models\Category_Faculty;
use App\Models\CategoryFaculty;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryFacultyResource extends Resource
{
    protected static ?string $model = Category_Faculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Category Faculty';
    protected static ?string $navigationGroup = 'Faculties';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('no_urut')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_urut'),
                TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ReplicateAction::make(),
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
            'index' => Pages\ListCategoryFaculties::route('/'),
            'create' => Pages\CreateCategoryFaculty::route('/create'),
            'edit' => Pages\EditCategoryFaculty::route('/{record}/edit'),
        ];
    }
}
