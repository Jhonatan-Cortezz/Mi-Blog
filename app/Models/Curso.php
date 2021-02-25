<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //en caso que quiera usar este modelo para la tabla users
    // ejecuto la siguiente instruccion
    protected $table = "users";
}
