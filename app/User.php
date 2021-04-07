<?php

namespace App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar'
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

    public static function uploadAvatar($image){
        $filename = $image->getClientOriginalName();
        (new self())->deleteOldImage();
        $image->storeAs('images',$filename, 'public');
        auth()->user()->update(['avatar' => $filename]);
    }

    protected function deleteOldImage(){
        //if(auth()->user()->avatar){
        if($this->avatar){
            dd('si entro');
            //dd('/public/images/'.auth()->user()->avatar);
            //Storage::delete('/public/images/'.auth()->user()->avatar);
            Storage::delete('/public/images/'.$this->avatar);
        }
        dd('no entro');
    }

    // Public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }

    // public function getNameAttribute($name)
    // {
    //     return 'Mi nombre es : '.ucfirst($name);
    // }

    /**
     * Get the phone record associated with the user.
     */
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

    public function address()
    {
        return $this->hasOne('App\Address');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Rol');
    }




}
