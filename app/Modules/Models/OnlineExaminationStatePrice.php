<?php namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineExaminationStatePrice extends Model
{

    protected $table = 'online_examination_state_price';

    protected $fillable = [
        'state_id', 'price', 'last_updated_by', 'online_examination_id'
    ];

}