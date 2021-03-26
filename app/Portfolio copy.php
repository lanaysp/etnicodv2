<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;
    protected $table    = 'portfolios';


    protected $fillable = [
        'name', 'photo', 'link', 'kategori'
    ];

    protected $hidden = [];
}
