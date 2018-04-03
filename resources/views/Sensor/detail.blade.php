@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
              
                 <div class="panel-body">

					  <p><b>id:</b> {{ $sensor->id }}</p>

					  <p><b>humedad:</b> {{ $sensor->humedad }}</p>

					  <p><b>temperatura:</b> {{ $sensor->temperatura }}</p>

					  <p><b>Fecha:</b> {{ $sensor->fecha }}</p>
					  
		    	</div>
		    </div>
		</div>
	</div>
</div>

@endsection
