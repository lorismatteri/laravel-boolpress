<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title', 'body'];

    
    /**
     * Get the category associated with the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //Category::class, 'foreign_key', 'local_key'

    /**
     * The tags that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
