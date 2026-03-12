<?php

namespace App\Filament\Resources\video_details\Pages;

use App\Filament\Resources\video_details\video_detailsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class Viewvideo_details extends ViewRecord
{
    protected static string $resource = video_detailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
