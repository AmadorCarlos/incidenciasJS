<?php

namespace incJS\Transformers;
use incJS\Incidencia;
use League\Fractal\TransformerAbstract;

class IncidenciaTransformer extends TransformerAbstract
{
    /**
     * @return array
     */
    public function transform( Incidencia $data )
    {
        return [
            'incidencia'           => $data->incidencia,
            'departamento'         => $data->incidencia_departamento,
            'municipio'            => $data->municipio->nombre,
            'descripcion'          => $data->descripcion,
            'fecha'                => $data->created_at->format('Y-m-d H:i:s'),
            'tipo'                 => $data->tipo,
        ];
    }
    
}