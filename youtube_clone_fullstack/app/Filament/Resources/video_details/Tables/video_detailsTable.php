<?php

namespace App\Filament\Resources\video_details\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class video_detailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                ->imageHeight(90)
                ->getStateUsing(fn ($record) => asset($record->thumbnail)),

                TextColumn::make('videoTitle')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('channelName')
                    ->searchable(),

                TextColumn::make('subscribers'),

                TextColumn::make('views'),

                TextColumn::make('time')
                    ->label('Uploaded'),

                TextColumn::make('videoLength')
                    ->label('Duration'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
