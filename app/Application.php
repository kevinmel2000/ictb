<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    
    public function subtheme()
    {
        return $this->belongsTo('App\Subtheme', 'subtheme_id');
    }

 	public function apptype()
    {
        return $this->belongsTo('App\ApplicationType', 'apptype_id');
    }

    public function participant()
    {
        return $this->belongsTo('App\User', 'participant_id');
    }

    public function publicationtype()
    {
        return $this->belongsTo('App\PublicationType', 'publication_id');
    }
      
}
