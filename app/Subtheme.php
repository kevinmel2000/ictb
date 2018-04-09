<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtheme extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function theme()
    {
        return $this->belongsTo('App\Theme', 'id_theme');
    }
}
