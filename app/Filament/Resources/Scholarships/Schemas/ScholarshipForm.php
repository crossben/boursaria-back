<?php

namespace App\Filament\Resources\Scholarships\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ScholarshipForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('name')
                    ->label('Scholarship Name')
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('country')
                    ->label('Country')
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('university')
                    ->label('University')
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('domains')
                    ->label('Domains')
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('level')
                    ->label('Level')
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('amount')
                    ->label('Amount')
                    ->numeric()
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('flagUrl')
                    ->label('Flag URL')
                    ->url()
                    ->required()
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('advantages')
                    ->label('Advantages')
                    ->required()
                    ->columnSpan(2)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('eligibilityConditions')
                    ->label('Eligibility Conditions')
                    ->required()
                    ->columnSpan(2)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                DateTimePicker::make('deadline')
                    ->required()
                    ->label('Deadline')
                    ->columnSpan(1)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                Textarea::make('applicationProcess')
                    ->label('Application Process')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                TextInput::make('requiredDocuments')
                    ->label('Required Documents')
                    ->required()
                    ->columnSpan(2)
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
                
                Textarea::make('contactInfo')
                    ->label('Contact Information')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(['class' => 'p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500']),
            ]);
    }
}
