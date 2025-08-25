<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('firstName')
                    ->required(),
                TextInput::make('lastName')
                    ->required(),
                DatePicker::make('dateOfBirth'),
                TextInput::make('nationality'),
                TextInput::make('currentLevel'),
                TextInput::make('fieldOfStudy'), 
                TextInput::make('role')
                    ->required()
                    ->default('student'),
                TextInput::make('password')
                    ->required()
                    ->password()
                    ->minLength(8)
            ]);
    }
}
