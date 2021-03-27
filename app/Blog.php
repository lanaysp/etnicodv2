<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Laravelista\Comments\Commentable;

class Blog extends Model
{
    use SoftDeletes,Commentable;

    protected $fillable = [
        'name', 'users_id', 'blogcategories_id', 'photo', 'description', 'slug'
    ];

    protected $hidden = [

    ];

    public function blogcategory(){
        return $this->belongsTo( Blogcategory::class, 'blogcategories_id', 'id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y');
    }
}
