<?php

namespace App;

use App\Scopes\LangScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programs extends Model
{
    use SoftDeletes;
    protected $table = "posts";
    protected $fillable = ['title', 'body', 'image', 'lang'];
    protected $attributes = [
        'type' => 2,
    ];

    /**
     * The "booting" method of the model.
     * Get the news for the current language
     * The second scope is for getting only the news form posts table
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LangScope());
        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', 2);
        });
    }
}
