<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerRequest extends Model
{
    protected $fillable = ["name", "email", "phone"];
}
