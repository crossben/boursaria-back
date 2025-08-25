<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Enter the post title')
                    ->required()
                    ->autofocus()
                    ->columnSpan(2),
                TextInput::make('excerpt')
                    ->label('Excerpt')
                    ->placeholder('Short summary of the post')
                    ->required()
                    ->columnSpan(2),
                RichEditor::make('content')
                    ->label('Content')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'link',
                        'bulletList',
                        'orderedList',
                        'blockquote',
                        'codeBlock'
                    ])
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->label('Author')
                    ->placeholder('Author name')
                    ->required()
                    ->columnSpan(1),
                DateTimePicker::make('publishedAt')
                    ->label('Publish Date')
                    ->required()
                    ->displayFormat('Y-m-d H:i')
                    ->columnSpan(1),
                TextInput::make('tags')
                    ->label('Tags')
                    ->placeholder('Comma separated tags')
                    ->required()
                    ->columnSpan(2),
                TextInput::make('imageUrl')
                    ->label('Image URL')
                    ->placeholder('https://example.com/image.jpg')
                    ->columnSpan(2),
            ])
            ->columns(2);
    }
}
