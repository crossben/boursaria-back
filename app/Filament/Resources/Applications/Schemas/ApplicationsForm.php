<?php

namespace App\Filament\Resources\Applications\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ApplicationsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('student_id')
                    ->required()
                    ->numeric()
                    ->extraAttributes([
                        'class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'
                    ]),

                TextInput::make('scholarship_id')
                    ->required()
                    ->numeric()
                    ->extraAttributes([
                        'class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'
                    ]),

                TextInput::make('status')
                    ->required()
                    ->default('pending')
                    ->extraAttributes([
                        'class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'
                    ]),
            ]);
    }
}
