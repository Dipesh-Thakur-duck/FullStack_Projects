<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video_details extends Model
{
    protected $table = 'video_details';
    protected $fillable = [
        'thumbnail',
        'link',
        'channelPic',
        'channelName',
        'subscribers',
        'videoTitle',
        'views',
        'time',
        'videoLength',
    ];
}
