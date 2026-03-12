<?php

namespace App\Filament\Resources\video_details\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class video_detailsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('thumbnail')
                ->required()
                ->image()
                ->disk('public_direct')
                ->directory('thumbnails')
                ->visibility('public'),

                TextInput::make('link')
                    ->url()
                    ->required(),

                FileUpload::make('channelPic')
                    ->required()
                    ->image()
                    ->disk('public_direct')
                    ->directory('channel-pictures')
                    ->visibility('public'),

                TextInput::make('channelName')
                    ->required()
                    ->maxLength(255),

                TextInput::make('subscribers')
                    ->required(),

                TextInput::make('videoTitle')
                    ->required()
                    ->maxLength(255),

                TextInput::make('views')
                    ->required(),

                TextInput::make('time')
                    ->required()
                    ->label('Uploaded'),

                TextInput::make('videoLength')
                    ->required()
                    ->label('Duration'),
            ]);
    }
}
