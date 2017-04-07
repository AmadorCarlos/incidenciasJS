<?php

namespace incJS;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{


	protected $fillable = [
        'inicidencia','muni_id','departamento_id','descripcion','user_id','tipo'
    ];

    public function getIncidenciaDepartamentoAttribute()
    {
       return $this->municipio->departamento->nombre;
    }

    public function municipio()
    {
    	return $this->belongsTo('incJS\Municipio','muni_id');
    }
    public function usuario()
    {
    	return $this->belongsTo('incJS\User','user_id');
    }
}
