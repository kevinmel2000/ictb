<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
     /**
     * Get the comments for the blog post.
     */
    public function subthemes()
    {

        return $this->hasMany('App\Subtheme', 'id_theme');
    }
}
