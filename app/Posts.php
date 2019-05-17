<?php

namespace App;

use App\Scopes\LangScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class posts extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'body', 'image', 'type', 'lang'];

    /**
     * The "booting" method of the model.
     * Get the posts for the current language
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LangScope());
    }
}
