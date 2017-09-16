<?php

namespace App\Modules\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone',  'username', 'address',
        'last_logged_in', 'last_logged_in', 'user_type', 'status'
    ];

    protected $appends = ['full_name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getFullNameAttribute(){
        $fullName = $this->first_name . ' '. $this->last_name;
        if(empty($fullName)){
            $fullName = $this->username;
        }

        return $fullName;
    }
}
