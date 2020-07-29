<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    use SoftDeletes;

    public function post()
    {
        return $this->hasMany('App\post', 'id_category', 'id');
    }
}
