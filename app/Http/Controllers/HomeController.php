<?php
namespace incJS\Http\Controllers;

use incJS\Incidencia;
use Illuminate\Http\Request;
use incJS\Transformers\IncidenciaTransformer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function saveInc(Request $request)
    {
        // dd($request);
        $inc = new Incidencia();
        $inc->incidencia=$request->incidencia;
        $inc->muni_id=$request->muni_id;
        $inc->departamento_id=$request->departamento_id;
        $inc->descripcion=$request->descripcion;
        $inc->user_id=$request->user_id;
        $inc->tipo=$request->tipo;
        $inc->save();
        return redirect()->route('home');
    }

    public function getDptos($id){
        // dd($request);
        if ($id!=0)
        {
            $resultado = Incidencia::with(['municipio'=>function ($query){
                $query->with(['departamento'=>function($query){
                    $query->addSelect("nombre","id");
                }])
                    ->addSelect(['id','departamento_id','nombre']);
            }])->where("departamento_id",$id)->select()->get();
            
            $jsonTrans=  fractal()
            ->collection($resultado)
            ->transformWith(new IncidenciaTransformer)
            // ->serializeWith(new \Spatie\Fractal\ArraySerializer())
            ->toArray();
            return $jsonTrans['data'];
        }
        else
        {
            $resultado = Incidencia::with(['municipio'=>function ($query){
                $query->with(['departamento'=>function($query){
                    $query->addSelect("nombre","id");
                }])
                    ->addSelect(['id','departamento_id','nombre']);
            }])->get();
            
            $jsonTrans=  fractal()
            ->collection($resultado)
            ->transformWith(new IncidenciaTransformer)
            // ->serializeWith(new \Spatie\Fractal\ArraySerializer())
            ->toArray();
            return $jsonTrans['data'];
        }
    }
 }
