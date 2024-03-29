<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password', 'registration_id', 'firstname', 'lastname', 'email',
        'type_participant_id', 'type_organization_id', 'organization', 'type_title_id', 'countries_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function participantType()
    {
        return $this->belongsTo('App\ParticipantType', 'type_participant_id');
    }

    public function application(){
     return $this->hasOne('App\Application', 'participant_id');   
    }

    public function title(){
        return $this->belongsTo('App\Title', 'type_title_id');
    }

    public function organizationType(){
        return $this->belongsTo('App\Organization', 'type_organization_id');
    }

    public function country(){
        return $this->belongsTo('App\Country', 'countries_id');
    }
    
}
