<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Laravelista\Comments\Commentable;

class Services extends Model
{
    use SoftDeletes,Commentable;

    protected $fillable = [
        'name', 'progres', 'expiration', 'status', 'users_id', 'price'
    ];


    protected $hidden = [

    ];
    protected $table="services";


    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d/F/Y');
    }
    public function getExpirationAttribute()
    {
        return Carbon::parse($this->attributes['expiration'])
        ->translatedFormat('d-F-Y');
    }

       public function billing()
    {
        return $this->hasMany(Billing::class, 'id', 'services_id');
    }
}
