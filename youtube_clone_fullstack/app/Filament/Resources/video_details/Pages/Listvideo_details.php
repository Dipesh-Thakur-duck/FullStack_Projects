<?php

namespace App\Filament\Resources\video_details\Pages;

use App\Filament\Resources\video_details\video_detailsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Listvideo_details extends ListRecords
{
    protected static string $resource = video_detailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
