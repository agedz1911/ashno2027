<?php

namespace App\Filament\Resources\CategoryFacultyResource\Pages;

use App\Filament\Resources\CategoryFacultyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryFaculty extends EditRecord
{
    protected static string $resource = CategoryFacultyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
