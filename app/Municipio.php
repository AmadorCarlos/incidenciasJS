<?php

namespace incJS;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
	protected $fillable = [
        'nombre','departamento_id'
    ];

    public function departamento()
    {
    	return $this->belongsTo('incJS\Departamento','departamento_id');
    }

    public function incidencias()
    {
    	return $this->hasMany('incJS\incidencia','muni_id');
    }
}

