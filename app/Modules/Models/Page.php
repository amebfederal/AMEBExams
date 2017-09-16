<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;

    protected  $table = 'cms_pages';
    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'title','slug', 'description', 'file', 'menu_position', 'parent_page_id', 'display_on_menu', 'visible','status'
    ];

    protected $appends = [
        'display_on_menu', 'visible','status','thumbnail_path'
    ];

    function getDisplayOnMenuAttribute(){
        return ucwords(str_replace('_', ' ', $this->display_on_menu));
    }

    function getVisibleTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->visible));
    }

    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function getImagePathAttribute(){
        return $this->path.'/'. $this->image;
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image;
    }
}