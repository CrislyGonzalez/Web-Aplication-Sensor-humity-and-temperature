<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;
use App\Sensor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $usuario = Usuario::all();
        $sensor = Sensor::all();
        return view('Usuario.index', ['usuario'=>$usuario, 'sensor'=>$sensor]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sensor = Sensor::all();
        $usuario = Usuario::all();
      

        return view('usuario.create', ['sensor'=>$sensor,'usuario'=>$usuario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->id = $request->id;
        $usuario->idSensor = $request->idSensor;
        $usuario->nombre = $request->nombre;
        $usuario->save();
//
        return redirect('../usuario/create')->with('message','El usuario ha sido registrado con éxito');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        $sensor = DB::table('sensor')
        ->select('sensor.id','sensor.humedad','sensor.temperatura','usuario.idSensor')
            ->join('usuario', 'usuario.idSensor', '=', 'sensor.id')
            ->get('');


        foreach ($sensor as $key => $sensor) {
            $sensor;
        }
       


        return view('Usuario.detail',['usuario'=>$usuario, 'sensor'=>$sensor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $sensor = Sensor::all();
        return view('Usuario.edit', ['usuario'=>$usuario, 'sensor'=>$sensor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
       
        $usuario->idSensor = $request->idSensor;
        $usuario->nombre = $request->nombre;
        $usuario->save();
        return redirect('../usuario/')->with('message','La actualización del usuario fue éxitoso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::where("id","=", $id)->get()->first();
        $usuario->delete();
        return redirect('../usuario')->with('message','Usuario eliminado con éxito!');
    }
}
