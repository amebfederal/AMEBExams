<?php namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class SessionVenue extends Model
{
    protected $fillable = [
        'venue_id', 'session_id'
    ];

    function venue(){
        return $this->hasMany('App\Modules\Model\SessionVenue');
    }


}