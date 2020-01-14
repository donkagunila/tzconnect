<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'type', 'status',
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


    public static function checktype($type)
    {
        switch ($type) {
            case 1:
                return 'User';
                break;
            case 2:
                return 'Vendor';
                break;
            
            default:
                return 'User';
                break;
        }
    }


    public static function checkstatus($status)
    {
        switch ($status) {
            case 1:
                return 'Active';
                break;
            case 2:
                return 'In Active';
                break;
            
            default:
                return 'Active';
                break;
        }
    }


    public function UserActivity()
    {
        return $this->hasMany(UserActivity::class);
    }

    public function Transport()
    {
        return $this->hasMany(Transport::class);
    }
}
