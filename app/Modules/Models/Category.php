<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private $path = 'uploads/product-category';

    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'name', 'slug', 'description', 'image', 'visibility', 'status', 'availability'
    ];

    protected $appends = [
        'visibility_text', 'status_text', 'availability_text', 'thumbnail_path', 'image_path'
    ];

    public function sub_categories(){
        return $this->hasMany('App\Modules\Models\SubCategory', 'category_id');
    }

    function course()
    {
        return $this->hasMany('App\Modules\Models\Course', 'category_id');
    }

    function getVisibilityTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->visibility));
    }

    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function getAvailabilityTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->availability
        ));
    }

    function getImagePathAttribute(){
        return $this->path.'/'. $this->image;
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image;
    }
}