<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'text', 'to_id'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'from_id');
    }
}
