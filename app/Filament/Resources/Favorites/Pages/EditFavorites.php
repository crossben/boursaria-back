<?php

namespace App\Filament\Resources\Favorites\Pages;

use App\Filament\Resources\Favorites\FavoritesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFavorites extends EditRecord
{
    protected static string $resource = FavoritesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
