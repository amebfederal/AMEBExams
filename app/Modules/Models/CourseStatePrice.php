<?php namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class CourseStatePrice extends Model
{

    protected $table = 'course_state_price';

    protected $fillable = [
        'state_id', 'price', 'last_updated_by', 'course_id'
    ];

}