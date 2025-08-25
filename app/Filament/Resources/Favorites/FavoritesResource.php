<?php

namespace App\Filament\Resources\Favorites;

use App\Filament\Resources\Favorites\Pages\CreateFavorites;
use App\Filament\Resources\Favorites\Pages\EditFavorites;
use App\Filament\Resources\Favorites\Pages\ListFavorites;
use App\Filament\Resources\Favorites\Pages\ViewFavorites;
use App\Filament\Resources\Favorites\Schemas\FavoritesForm;
use App\Filament\Resources\Favorites\Schemas\FavoritesInfolist;
use App\Filament\Resources\Favorites\Tables\FavoritesTable;
use App\Models\Favorites;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FavoritesResource extends Resource
{
    protected static ?string $model = Favorites::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FavoritesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FavoritesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FavoritesTable::configure($table);
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
            'index' => ListFavorites::route('/'),
            'create' => CreateFavorites::route('/create'),
            'view' => ViewFavorites::route('/{record}'),
            'edit' => EditFavorites::route('/{record}/edit'),
        ];
    }
}
