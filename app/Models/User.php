<?php

namespace App\Models; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function getRouteKeyName()
    {
        return 'name';
    }
    
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_users', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles)
    {
        if (Is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }

        return false;
    }

    public static function hasRole($role)
    {
        if (auth()->user()->roles()->first()->slug === $role) {
            return true;
        }
        return false;
    }


    protected $fillable = [
        'name', 'email', 'password', 'pin_code', 'username','empID'
    ];

  
    protected $hidden = [
        'pin_code','password', 'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function faculty()
    {
        return $this->hasOne('App\Models\Faculty', 'userID', 'id');
    }

    public function secretary()
    {
        return $this->hasOne('App\Models\Secretary', 'userID', 'id');
    }

    public function programhead()
    {
        return $this->hasOne('App\Models\ProgramHead', 'userID', 'id');
    }

    public static function boot()
    {
            parent::boot();
            self::created(function ($model) { 
                $model->empID ="EMP-". str_pad($model->id, 9 , "0", STR_PAD_LEFT);
               $model->save();
           });
    }
}
