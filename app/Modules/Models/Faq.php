<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    use Sluggable;
    protected  $table ='faqs';
    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'slug', 'description', 'status', 'faq_category_id'

    ];

    protected $appends = [
        'status_text'
    ];


    function getStatusTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->status));
    }




    function faq_catecory(){
        return $this->belongsTo('App\Modules\Models\FaqCategory','faq_category_id');
    }





}