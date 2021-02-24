<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    /**
     * Get all of the article for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    
    public function article()
    {
        return $this->hasMany('App\Article');
    }
}
