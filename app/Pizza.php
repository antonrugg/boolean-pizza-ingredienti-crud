<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pizze';
    protected $fillable = ['nome_pizza'];


    public function ingredienti()
    {
        return $this->belongsToMany('App\Ingrediente', 'ingrediente_pizza', 'pizza_id', 'ingrediente_id');
    }
}
