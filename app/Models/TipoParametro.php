<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoParametro extends Model
{
    protected $table="tipo_parametro";

    protected $fillable= [
    	"id","nombre"
    ];
}
