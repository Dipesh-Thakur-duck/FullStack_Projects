<?php

namespace App\Filament\Resources\video_details\Pages;

use App\Filament\Resources\video_details\video_detailsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class Editvideo_details extends EditRecord
{
    protected static string $resource = video_detailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
