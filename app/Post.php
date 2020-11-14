<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = [
        'post_text','post_file'
    ];

    public function user(){
        return $this->belongsTo('App\User')->select('name','id','profile','email');
    }


    public function getCreatedAtAttribute($date)
       {
           return Carbon::parse($date)->diffForHumans();
       }

    public function reaction(){
        return $this->hasMany('App\Reaction');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
