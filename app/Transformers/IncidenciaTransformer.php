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
            'hora'                 => $data->created_at->setTimezone('America/Managua')->format("h:i a"),
            'fecha'                => $data->created_at->setTimezone('America/Managua')->format('d-m-Y'),
            'tipo'                 => $data->tipo,
        ];
    }
    
}