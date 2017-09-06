<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'name', 'slug', 's_date', 'e_date','venue_id'
    ];

    function venues(){
        return $this->belongsToMany('App\Modules\Model\Venue', 'session_venue');
    }
}