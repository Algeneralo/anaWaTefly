<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Directors extends Model
{
    use SoftDeletes;
    protected $fillable = ['name_ar', 'name_en', "position_ar", "position_en", 'image', 'type'];

    //add image default value
    protected $attributes = [
        "image" => "staff.png",
    ];
}
