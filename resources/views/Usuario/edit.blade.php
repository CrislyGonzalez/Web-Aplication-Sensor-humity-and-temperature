@extends('welcome')

@section('content')

 <div class="container">
    <h5>Edición de Usuario </h5>
    <br>
    <div class="row">
        <div class="col-md-7 col-md-offset-0">
          <div class="panel panel-default">

                 <div class="panel-body">

                      <form class="form-horizontal" action="/usuario/{{$usuario->id}}" method="post">
                      
                       <div class="form-group">
                            <label for="id" class="col-md-2 control-label">id usuario</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="id" value="{{$usuario->id}}" placeholder="" disabled>
                            </div>
                        </div>


                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="nombre"> Nombre usuario </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="nombre" value="{{$usuario->nombre}}" placeholder="">
                                	{{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                              </div>
                              
                        </div>


                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="idSensor">Sensores Registrados</label>
                              <div class="col-md-4">
                                  <select class="form-control" id="idSensor"  name="idSensor">
                                        @foreach ($sensor as $sensor)
                                           <option>
                                                {{$sensor->id}}
                                           </option>
                                
                                        @endforeach
                                    </select>
                              </div>
                              
                        </div>


                      <div class="col-md-4 col-md-offset-6" >
                          <input type="hidden" name="_method" value="put">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit"  class="btn btn-info" name="name" value="Editar">
                      </div>
                    
                  </form>
                </div>

            </div>

        </div>
    </div>
    
  
  </div>




@endsection

