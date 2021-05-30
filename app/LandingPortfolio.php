<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingPortfolio extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'photo', 'link'
    ];

    protected $table = 'landing_portfolio';

    protected $hidden = [];
}
