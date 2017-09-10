<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class AccountHolder extends Model
{
    protected $fillable = [
        'title', 'role', 'fname', 'lname','email','password','phone','o_phone','address','alt_address','city','suburb','state_id','country'
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
        return $this->belongsTo('App\Modules\Models\State', 'account_state')->withTimestamps();
    }
}