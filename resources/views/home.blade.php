@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <?php
        use incJS\Incidencia;
        $data=NULL;
        if (Auth::user()->alcance=="Departamental")
        {
            $data= incJS\Incidencia::where('departamento_id',Auth::user()['departamento_id'])->get();
        }
        else
        {
            $data= incJS\Incidencia::where('departamento_id',Auth::user()['departamento_id'])->get();
        }
    ?>

    <div class="row">
        <div class="col-md-5 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(Auth::user()->role=="Digitador")
                    Digitación
                    @elseif(Auth::user()->role=="Monitor")
                    Monitoreo
                    @elseif(Auth::user()->role=="Digitador" && Auth::user()->role=="Monitor")
                    Digitación | Monitoreo
                    @else
                    SuperUser
                    @endif
                </div>

                <div class="panel-body">
                    @if(Auth::user()->role=="Digitador" || Auth::user()->role=='Mon/Dig' || Auth::user()->role=="SU")
                        {{-- {{Auth::user()->role}} {{Auth::user()->alcance}} --}}
                        
                        <form id="mainForm" class="form-group" method="POST" action="/home">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="incidencia_name">Incidencia</label>
                                <input required id="incidencia_name" class="form-control" name="incidencia" placeholder="Nombre la Incidencia">
                            </div>
                            
                            <dptos-munis-digi :selected-dpto="{{Auth::user()->departamento_id}}" :dpto-disable="true"></dptos-munis-digi>
                            
                            <div class="form-group">
                                <label for="incidencia_descripcion">Descripción</label>
                                <textarea required rows="5" id="incidencia_descripcion" class="form-control" name="descripcion" placeholder="Detalle la incidencia">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Tipo</label>
                                <div class="form-group row">
                                    <div class="col-md-4 col-sm-12">
                                        <input id="MayorRadio" class="" type="radio" name="tipo" value="Mayor" checked>
                                        <label for="MayorRadio" style="color:red;margin-right: 10px"> Incidencia Mayor  </label>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <input id="MenorRadio" class="" type="radio" name="tipo" value="Menor">
                                        <label for="MenorRadio" style="color:#ed8e00;margin-right: 10px"> Incidencia Menor  </label>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <input id="SinRadio" class="" type="radio" name="tipo" value="Sin">                                    
                                        <label for="SinRadio" style="color:green">Sin Prioridad</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group text-right">
                                <button class="btn btn-success" type="submit">Enviar</button>
                            </div>
                        </form>
                    @elseif(Auth::user()->role=="Monitor" || Auth::user()->role=='Mon/Dig' || Auth::user()->role=="SU")
                        <mapa></mapa>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Incidencias Reportadas
                </div>
                <div class="panel-body"  style="overflow: auto !important; max-height: 500px">
                    
                    <tabla :data-in='{{json_encode($data)}}' :reload-uri='true' alcance='{{Auth::user()->alcance}}' :departamento_id="{{Auth::user()->departamento_id}}">
                        <v-client-table :options="tableOptions" :columns="['incidencia','tipo','departamento_id','muni_id','descripcion','created_at']" :data="{{json_encode($data)}}"></v-client-table>
                    </tabla>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
