<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    private $path = 'uploads/course';
    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'slug', 'subject_code', 'image', 'main_category_id', 'category_id', 'sub_category_id', 'grade_id', 'default_price',
        'rising_software_key', 'state_price', 'visibility', 'status', 'availiability_state', 'last_updated_by', 'description'
    ];

    protected $appends = [
        'visibility', 'status', 'availiability_state', 'thumbnail_path'
    ];


    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }


    function getVisibilityTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->visibility));
    }

    function getAvailabilityTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->availiability_state));
    }


    function getImagePathAttribute(){
        return $this->path.'/'. $this->image;
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image;
    }

    function category()
    {
        return $this->belongsTo('App\Modules\Models\Category', 'category_id');
    }

    function sub_category(){
        return $this->belongsTo('App\Modules\Models\SubCategory', 'sub_category_id');
    }

    function grade(){
        return $this->belongsTo('App\Modules\Models\Grade', 'grade_id');
    }




}