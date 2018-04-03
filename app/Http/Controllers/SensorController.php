<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor = Sensor::all();
        return view('Sensor.index',['sensor'=> $sensor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sensor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sensor = new Sensor;
        $sensor->id = $request->id;
        $sensor->temperatura = $request->temperatura;
        $sensor->humedad = $request->humedad;
        $sensor->fecha = $request->fecha;
        $sensor->save();

      return redirect('../sensor/create')->with('message','El registro del sensor fue éxitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sensor = Sensor::find($id);
        return view('Sensor.detail')->with('sensor',$sensor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sensor = Sensor::find($id);
        return view('Sensor.edit')->with('sensor',$sensor);
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
        $sensor = Sensor::find($id);
        $sensor->temperatura = $request->temperatura;
        $sensor->humedad = $request->humedad;
        $sensor->fecha = $request->fecha;
        $sensor->save();

        return redirect('../sensor/')->with('message','La actualización del sensor fue éxitoso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sensor = Sensor::where("id","=", $id)->get()->first();
        $sensor->delete();
        return redirect('../sensor')->with('message','Sensor eliminado con éxito!');
    }
}
