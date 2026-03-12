<?php

namespace App\Filament\Resources\video_details;

use App\Filament\Resources\video_details\Pages\Createvideo_details;
use App\Filament\Resources\video_details\Pages\Editvideo_details;
use App\Filament\Resources\video_details\Pages\Listvideo_details;
use App\Filament\Resources\video_details\Pages\Viewvideo_details;
use App\Filament\Resources\video_details\Schemas\video_detailsForm;
use App\Filament\Resources\video_details\Schemas\video_detailsInfolist;
use App\Filament\Resources\video_details\Tables\video_detailsTable;
use App\Models\video_details;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class video_detailsResource extends Resource
{
    protected static ?string $model = video_details::class;
    
    protected static ?string $navigationLabel = 'Video Details';
    protected static ?string $modelLabel = 'Video Details';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return video_detailsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return video_detailsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return video_detailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Listvideo_details::route('/'),
            'create' => Createvideo_details::route('/create'),
            'view' => Viewvideo_details::route('/{record}'),
            'edit' => Editvideo_details::route('/{record}/edit'),
        ];
    }
}
