<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class OnlineExamination extends Model
{
    use Sluggable;
    private $path = 'uploads/online-exams';

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'slug', 'description', 'image', 'subject_code',
        'expiry_months', 'expiry_date',
        'renewable_fee_type', 'renewable_fee',

        'sub_category_id', 'grade_id',
        'exam_duration', 'marking_type', 'is_manual_marking',

        'default_price', 'certificate_type', 'exam_type', 'rising_software_key', 'pricing_policy',
        'last_updated_by', 'last_updated_by_user',

        'status', 'visibility', 'state_price', 'no_of_practice_exams'
    ];

    protected $appends = [
        'marking_type', 'certificate_type', 'exam_type', 'pricing_policy', 'status', 'has_state_price'
    ];

    function sessions()
    {
        return $this->belongsToMany('App\Modules\Models\Session', 'session_venue');
    }

    function getMarkingTypeTextAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->marking_type));
    }

    function getCertificateTypeTextAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->certificate_type));
    }

    function getExamTypeTextAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->exam_type));
    }

    function getPricingPolicyTypeTextAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->pricing_policy));
    }

    function getStatusTextAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->status));
    }

    function getImagePathAttribute()
    {
        return $this->path . '/' . $this->image;
    }

    function getThumbnailPathAttribute()
    {
        return $this->path . '/thumb/' . $this->image;
    }

    function getHasStatePriceAttribute(){
        return $this->state_price == 'state' ? 1 : 0;
    }

    function states(){
        return $this->belongsToMany('App\Modules\Models\State', 'online_examination_state');
    }

    function category(){
        return $this->belongsTo('App\Modules\Models\Category', 'sub_category_id');
    }

    function grade(){
        return $this->belongsTo('App\Modules\Models\Grade');
    }

    function state_prices(){
        return $this->hasMany('App\Modules\Models\OnlineExaminationStatePrice', 'online_examination_id');
    }
}
