<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PracticeExamination extends Model
{
    private $path = 'uploads/practice-exams';
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'slug', 'description', 'image', 'exam_id',
        'expiry_months', 'expiry_date',

        'price', 'allowed_number',
        'last_updated_by', 'last_updated_by_user',

        'status', 'visibility'
    ];

    protected $appends = [
        'status', 'visibility', 'image_path', 'thumbnail_path'
    ];

    function sessions()
    {
        return $this->belongsToMany('App\Modules\Models\Session', 'session_venue');
    }

    function getStatusTextAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function getImagePathAttribute()
    {
        return $this->path . '/' . $this->image;
    }

    function getThumbnailPathAttribute()
    {
        return $this->path . '/thumb/' . $this->image;
    }
}
