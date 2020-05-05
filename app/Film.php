<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded = [];
    public function users(){
        return $this->belongsToMany('App\User', 'film_user', 'filmId','userId');
    }
}
