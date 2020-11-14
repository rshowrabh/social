<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Cache;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type','bio','profile', 'cover'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['is_online'];

    public function getIsOnlineAttribute($value)
    {
        if(Cache::has('is_online' . $this->id)){
             return '1';
        }
        else{
           return '0';
        }
    }

    public function getLastSeenAttribute($date)
       {
           return Carbon::parse($date)->diffForHumans();
       }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function follower(){
        return $this->hasMany('App\Follower', 'following_id');
    }
    public function following(){
        return $this->hasMany('App\Follower', 'user_id');
    }

    public function messages(){
        return $this->hasMany('App\Message','from_id');
    }
    
}
