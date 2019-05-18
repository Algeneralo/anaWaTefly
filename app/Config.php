<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class config extends Model
{
    use SoftDeletes;
    protected $table = "config";
    protected $fillable = ['facebook', 'twitter', 'instagram', 'phone',
        'telephone', 'location_ar', 'location_en', 'welcome_message_ar', 'welcome_message_en'];
}
