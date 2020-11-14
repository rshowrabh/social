<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    protected $fillable = [
        'reaction','user_id','post_id'
     ];
     

     public function user(){
         return $this->belongsTo('App\User');
     }
     public function getCreatedAtAttribute($date)
       {
           return Carbon::parse($date)->diffForHumans();
       }
}
