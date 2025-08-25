<?php

namespace App\Filament\Resources\Favorites\Pages;

use App\Filament\Resources\Favorites\FavoritesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFavorites extends CreateRecord
{
    protected static string $resource = FavoritesResource::class;
}
