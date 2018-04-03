@extends('welcome')

@section('content')

<div class="container">
<p><b>Registro de sensores:</b></p>
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                        <form class="form-horizontal" role="form" action="/sensor" method="post">

                        <div class="form-group">
                            <label for="id" class="col-md-2 control-label">id sensor</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="id" value="" placeholder="">
                                {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                            </div>
                        </div>


                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="humedad"> Humedad </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="humedad" value="" placeholder="">
                                	{{ ($errors->has('humedad')) ? $errors->first('humedad') : '' }}
                              </div>
                              
                        </div>

                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="temperatura"> Temperatura </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="temperatura" value="" placeholder="">
                                	{{ ($errors->has('temperatura')) ? $errors->first('temperatura') : '' }}
                              </div>
                              
                        </div>

                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="fecha"> Fecha </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="fecha" value="" placeholder="">
                                	{{ ($errors->has('fecha')) ? $errors->first('fecha') : '' }}
                              </div>
                              
                        </div>

        
                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-2">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input class="btn btn-primary btn-block" type="submit" name="name" value="Crear">
                            </div>
                        </div>
      				    @if (session('message'))
                                  <div class="content2" >
                                      <p>{{ session('message') }}</p>
                                      <br><br>
                                  </div>
          
                         @endif 

                             <script type="text/javascript" src="../js/jquery.js"></script>
                             <script type="text/javascript">
                                $(document).ready(function() {   
                                    setTimeout(function() {
                                        $(".content2").fadeOut(1500);
                                    },3000);
                                });
                             </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection