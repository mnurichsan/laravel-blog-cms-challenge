<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
