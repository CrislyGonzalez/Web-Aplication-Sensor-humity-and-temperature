@extends('welcome')

@section('content')

 <div class="container">
    <h5>Edición del sensor selecionado </h5>
    <br>
    <div class="row">
        <div class="col-md-7 col-md-offset-0">
          <div class="panel panel-default">

                 <div class="panel-body">

                      <form class="form-horizontal" action="/sensor/{{ $sensor->id}}" method="post">
                      
                       <div class="form-group">
                            <label for="id" class="col-md-2 control-label">id sensor</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="id" value="{{$sensor->id}}" placeholder="" disabled>
                               
                            </div>
                        </div>


                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="humedad"> Humedad </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="humedad" value="{{$sensor->humedad}}" placeholder="">
                                	{{ ($errors->has('humedad')) ? $errors->first('humedad') : '' }}
                              </div>
                              
                        </div>

                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="temperatura"> Temperatura </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="temperatura" value="{{$sensor->temperatura}}" placeholder="">
                                	{{ ($errors->has('temperatura')) ? $errors->first('temperatura') : '' }}
                              </div>
                              
                        </div>

                         <div class="form-group">
                              <label  class="col-md-2 control-label" for="fecha"> Fecha </label>
                              <div class="col-md-4">
                                   <input class="form-control" type="text" name="fecha" value="{{$sensor->fecha}}" placeholder="">
                                	{{ ($errors->has('fecha')) ? $errors->first('fecha') : '' }}
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

