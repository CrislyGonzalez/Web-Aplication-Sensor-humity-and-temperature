<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                <table class="table">
                  <thead>
                          <tr>
                            <th> Id Usuario</th>
                            <th> Nombre</th>
                            <th> Sensor asociado</th>
                            <th></th>
                            <th></th>
                            <th></th>

                          </tr>
                          <br>
                  </thead>

                  <tbody>
            
                    @foreach ($usuario as $item)
                                  <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->idSensor }}</td>
                                        <td>
                                          <a href="/usuario/{{$item->id}}" class="btn btn-success btn-sm" role="button"> Detalle Usuario </a>
                                        </td>

                                        <td>
                                        <a href="/usuario/{{ $item->id }}/edit" class= "btn btn-warning btn-sm" role="button">Editar</a> 
                                        </td>


                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{ $item->id}}">Eliminar</button>
                                        </td>
                                           
                        
                                  </tr>

                                    <div class="modal fade" id="myModal{{ $item->id}}" role="dialog">
           
                                      <div class="modal-dialog">

                                       
                                              <div class="modal-content">
                                               
                                                      <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                       
                                                               <h4 class="modal-title"><b>¿Desea Eliminar un usuario del sistema?</b> </h4>
                                                       
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-body">
                                                               El usuario será eliminado del sistema
                                                      </div>
                                                       
                                                       
                                                      <div class="modal-footer">
                                                      
                                                               <form  action="/usuario/{{ $item->id}}" method="post">
                                                                  <input type="hidden" name="_method" value="delete">
                                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                  <input  class= "btn btn-danger btn-sm"  value="Eliminar" type="submit" name="name" >
                                                                </form>
                                                                

                                                                <button href="/usuario" type="button" class="btn btn-primary btn-sm" type="submit" name="name" data-dismiss="modal">Cancelar</button>

                                                      </div>
                                               
                                              </div>
                                       
                                      </div>
           
                              </div>


                                    
                    @endforeach


            </tbody>
            </table>
          </div>
        </div>
      </div>

   </div>



</body>
</html>