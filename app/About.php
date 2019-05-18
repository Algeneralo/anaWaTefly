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

    /**
     * extract the head message from json
     *
     * @return string
     */
    public function getHeadMessageAttribute()
    {
        return json_decode($this->attributes['head_message'])->head_message;
    }

    /**
     * extract the head name from json
     *
     * @return string
     */
    public function getHeadNameAttribute()
    {
        return json_decode($this->attributes['head_message'])->head_name;
    }
}
