<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
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
        'name','slug', 'prefix', 'location', 'seats', 'from', 'till'
    ];

    protected $appends = [
        'venue', 'status'
    ];

    function sessions(){
        return $this->belongsToMany('App\Modules\Models\Session', 'session_venue');
    }

    function getVenueTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->venue));
    }

    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }
}
