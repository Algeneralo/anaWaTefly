<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerRequests extends Model
{
    protected $fillable = ["name", "email", "phone"];
}
