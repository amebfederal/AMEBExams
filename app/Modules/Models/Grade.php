<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
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
        'title', 'slug', 'code', 'status', 'sub_category_id'
    ];

    protected $appends = [
        'status_text'
    ];

    function sub_category(){
        return $this->belongsTo('App\Modules\Models\SubCategory', 'sub_category_id');
    }

    function course()
    {
        return $this->hasMany('App\Modules\Models\Course', 'grade_id');
    }

    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }
}