<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    private $path = 'uploads/banner';
    protected $table = 'banners';


    protected $fillable = [
        'title', 'image', 'description',  'position', 'status', 'visibility',
        'button_status',  'button_text', 'button_link', 'button_target',
        'second_button_status', 'second_button_text', 'second_button_link', 'second_button_target',
    ];

    protected $appends = [
        'status_text', 'visibility_text', 'button_status_text', 'second_button_status_text', 'thumbnail_path'
    ];






    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function getVisibiltyTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->visibility));
    }


    function getButtonStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->button_status));
    }

    function getSecondButtonStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->second_button_status));
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image;
    }

}