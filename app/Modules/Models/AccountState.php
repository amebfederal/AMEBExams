<?php namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class AccountState extends Model
{
    protected $fillable = [
        'account_id', 'state_id'
    ];

    function state(){
        return $this->belongsTo('App\Modules\Model\AccountState');
    }


}