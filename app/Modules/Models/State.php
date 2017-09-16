<?php namespace App\Modules\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class State extends Model
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
        'name','slug', 'prefix', 'notification_email', 'contact_email', 'phone', 'address', 'contact_person','contact_person_phone','contact_person_email','api','key'
    ];

    protected $appends = [
        'notification', 'authority'
    ];

    function getNotificationTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->notification));
    }

    function getAuthorityTextAttribute(){
        return ucwords(str_replace('_', ' ', $this->authority));
    }

    function account(){
        return $this->belongsTo('App\Modules\Models\AccountHolder', 'account_state');
    }
}