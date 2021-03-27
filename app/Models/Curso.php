<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //en caso que quiera usar este modelo para la tabla users
    // ejecuto la siguiente instruccion
    // protected $table = "users";

    // protected $fillable = ['name', 'descripcion', 'categoria'];esto me permite poner los campos que deseo enviar

    protected $guarded = [];/* lo dejo vacio pero en caso de queiro una validacion con un campo 
    debo piner el nombre del campo que no quiero enviar */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
