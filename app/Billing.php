<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Laravelista\Comments\Commentable;

class Billing extends Model
{
    use SoftDeletes,Commentable;

    protected $fillable = [
        'invoice', 'price', 'status', 'services_id', 'users_id', 'duedate', 'photo'
    ];


    protected $hidden = [

    ];
    protected $table="billing";





    public function getCreatedAtAttribute()
    {
        return
        Carbon::parse($this->attributes['created_at'])->translatedFormat('d/F/Y');
    }
    public function getDueDateAttribute()
    {
        return
        Carbon::parse($this->attributes['duedate'])->translatedFormat('d/F/Y');
    }

     public function services()
    {
        return $this->belongsTo(Services::class, 'services_id', 'id');
    }
      public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }


}
