<?php

namespace App\Filament\Resources\CategoryFacultyResource\Pages;

use App\Filament\Resources\CategoryFacultyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryFaculties extends ListRecords
{
    protected static string $resource = CategoryFacultyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
