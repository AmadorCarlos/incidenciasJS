<?php

namespace incJS;

use Illuminate\Database\Eloquent\Model;

class incidencia extends Model
{
	protected $fillable = [
        'inicidencia','muni_id','descripcion','user_id','tipo'
    ];

    public function municipio()
    {
    	return $this->belongsTo('incJS\Municipio','muni_id');
    }
    public function usuario()
    {
    	return $this->belongsTo('incJS\User','user_id');
    }
}
