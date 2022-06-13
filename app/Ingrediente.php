<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{

    protected $table = 'ingredienti';

    protected $fillable = ['name'];

    public function pizze()
    {
        return $this->belongsToMany('App\Pizza', 'ingrediente_pizza', 'ingrediente_id', 'pizza_id');
    }
}
