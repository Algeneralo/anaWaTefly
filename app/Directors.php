<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directors extends Model
{
    use SoftDeletes;
    protected $fillable = ['name_ar', 'name_en', "position_ar", "position_en", 'image', 'type'];
}
