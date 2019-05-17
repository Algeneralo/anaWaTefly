<?php

namespace App;

use App\Scopes\LangScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class about extends Model
{
    use SoftDeletes;
    protected $table = 'about';
    protected $fillable = ['info', 'message', 'vision', 'head_message', 'lang'];

    /**
     * The "booting" method of the model.
     * Get the data for the current language
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LangScope());
    }
}
