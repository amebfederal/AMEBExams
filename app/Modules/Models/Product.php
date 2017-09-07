<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'name','slug', 'description', 'image', 'product_category_id', 'sub_category_id', 'grade_id','exam_duration','default_price','expiry_months','marking_type','certificate_type',
        'exam_type','online_key','pricing_policy','created_date','last_updated_date','last_updated_by','status'
    ];

    protected $appends = [
        'marking_type', 'certificate_type','exam_type','pricing_policy','status'
    ];

    function sessions(){
        return $this->belongsToMany('App\Modules\Models\Session', 'session_venue');
    }

    function getmarkingTypeTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->marking_type));
    }

    function getcertificateTypeTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->certificate_type));
    }
    function getexamTypeTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->exam_type));
    }
    function getpricingPolicyTypeTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->pricing_policy));
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
