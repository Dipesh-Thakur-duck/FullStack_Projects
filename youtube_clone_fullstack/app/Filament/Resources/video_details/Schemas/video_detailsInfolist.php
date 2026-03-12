<?php

namespace App\Filament\Resources\video_details\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class video_detailsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('thumbnail')
                ->imageHeight(90)
                ->getStateUsing(fn ($record) => asset($record->thumbnail)),

                TextEntry::make('videoTitle')
                    ->label('Title'),

                TextEntry::make('channelName')
                    ->label('Channel'),

                ImageEntry::make('channelPic')
                    ->label('Channel Picture')
                    ->getStateUsing(fn ($record) => asset($record->channelPic))
                    ->imageHeight(60),

                TextEntry::make('subscribers'),

                TextEntry::make('views'),

                TextEntry::make('time')
                    ->label('Uploaded'),

                TextEntry::make('videoLength')
                    ->label('Duration'),

                TextEntry::make('link')
                    ->url(fn ($state) => $state)
                    ->openUrlInNewTab(),
            ]);
    }
}
