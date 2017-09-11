<?php namespace App\Modules\Model;

use App\Modules\Model;

class ProductCategory extends Model
{

    protected $fillable = [
        'name', 'slug', 'description', 'image', 'visibility', 'status', 'availability'
    ];

    protected $appends = [
        'visibility_text', 'status_text', 'availability_text'
    ];

    function getVisibilityTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->visibility));
    }

    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }
}