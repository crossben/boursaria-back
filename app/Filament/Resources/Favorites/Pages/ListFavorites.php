<?php

namespace App\Filament\Resources\Favorites\Pages;

use App\Filament\Resources\Favorites\FavoritesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFavorites extends ListRecords
{
    protected static string $resource = FavoritesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
