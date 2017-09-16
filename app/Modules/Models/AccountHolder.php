<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class AccountHolder extends  Authenticatable
{
    protected $table = 'account_holders';
    protected $fillable = [
        'title', 'role', 'fname', 'lname','email','password','phone','o_phone','address','alt_address','city','suburb','country', 'preference',
        'state_id', 'postcode', 'school_name'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'status'
    ];
    
    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function state(){
        return $this->belongsTo('App\Modules\Models\State', 'account_state');
    }
}