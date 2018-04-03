@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
              
                 <div class="panel-body">

					  <p><b>id usuario:</b> {{ $usuario->id }}</p>

					  <p><b>Nombre:</b> {{ $usuario->nombre }}</p>

					  <p><b>id Sensor asoaciado:</b> {{ $usuario->idSensor }}</p>

					  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#infoSensor">Sensor Info</button>
					      <div id="infoSensor" class="collapse">
					            <p><b>id Id:</b> {{ $sensor->id }}</p>
					            <p><b>id Temperatura:</b> {{ $sensor->temperatura }}</p>
					            <p><b>id Humedad:</b> {{ $sensor->humedad }}</p>
					      </div>
   						 
					  
		    	</div>
		    </div>
		</div>
	</div>
</div>

@endsection
