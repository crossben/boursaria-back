<?php

namespace App\Filament\Resources\Favorites\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FavoritesInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('student_id')
                    ->numeric(),
                TextEntry::make('scholarship_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
