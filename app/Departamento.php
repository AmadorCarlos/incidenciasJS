<?php

namespace incJS;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected $fillable = [
        'nombre','centro','zoom'
    ];

    public function municipios()
    {
    	return $this->hasMany('incJS\Municipio','departamento_id');
    }
}
