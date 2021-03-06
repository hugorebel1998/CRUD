<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombreArticulo',
        'Seccion',
        'Precio',
        'PaisOrigen',
        'Fecha'

    ];
}
