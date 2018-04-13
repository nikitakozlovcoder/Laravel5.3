<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Articles()
    {
        //return $this->hasMany('App\Article', 'category_id', 'article_id');
        return $this->hasMany('App\Article', 'category_id');
    }
}
