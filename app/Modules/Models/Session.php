<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'name', 'status', 'start_date', 'end_date'
    ];

    function venues(){
        return $this->belongsToMany('App\Modules\Models\Venue', 'session_venue')->withTimestamps();
    }
}