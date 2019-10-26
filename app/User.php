<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'identification',
        'name', 
        'phone',
        'address',
        'email', 
        'password',
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

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        if($this->role_id === 1)
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function isCustomer()
    {
        if($this->role_id === 2)
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function isEmployee()
    {
        if($this->role_id === 3)
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

}
