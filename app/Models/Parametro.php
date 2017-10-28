<?php

namespace App\Models;

use App\Models\TipoParametro;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{	
	protected $table='parametros';

    protected $fillable=["id","tipo_parametro_id","nombre","descripcion"];

    public function tipos_parametros()
    {
        return $this->belongsTo(TipoParametro::class, 'tipo_parametro_id');
    }
}
