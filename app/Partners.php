<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partners extends Model
{
    use SoftDeletes;
    protected $fillable = ['name_ar', 'name_en', 'image'];
    protected $attributes = [
        "image" => "partner-image.png",
    ];
}
