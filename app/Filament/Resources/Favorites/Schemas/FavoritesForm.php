<?php

namespace App\Filament\Resources\Favorites\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FavoritesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('student_id')
                    ->required()
                    ->numeric(),
                TextInput::make('scholarship_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
