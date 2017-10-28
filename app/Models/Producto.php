<?php

namespace App\Models;

use App\User;
use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";

    protected $fillable=[
    	"id","nombre","descripcion","costo","categoria","usuario"
    ];

    public function categorias()
    {
        return $this->belongsTo(Parametro::class,'categoria');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class,'
        	usuario');
    }
}
