<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ParentPage extends Model
{
    use Sluggable;


    protected  $table = 'cms_parent_pages';
    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title','slug', 'description', 'file','visible','status'
    ];

    protected $appends = [
        'status','thumbnail_path','visible'
    ];

    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function getVisibleTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->visible));
    }

    function getImagePathAttribute(){
        return $this->path.'/'. $this->image;
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image;
    }
}