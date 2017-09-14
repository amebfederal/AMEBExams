<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{


    use Sluggable;
    protected $table = 'faq_categories';
    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'slug', 'description',  'status',
    ];

    protected $appends = [
        'status_text'
    ];


    function faq()
    {
        return $this->hasMany('App\Modules\Models\Faq', 'faq_category_id');
    }



    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }

}