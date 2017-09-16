<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'slug', 'description', 'video_link', 'rising_software_link', 'status', 'course_id'
    ];

    protected $appends = [
        'status_text'
    ];

    function course(){
        return $this->belongsTo('App\Modules\Models\Course');
    }



    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }
}