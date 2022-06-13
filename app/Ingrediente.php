<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredienti';

    public function pizze()
    {
        return $this->belongsToMany('App\Pizza', 'ingrediente_pizza', 'ingrediente_id', 'pizza_id');
    }
}
