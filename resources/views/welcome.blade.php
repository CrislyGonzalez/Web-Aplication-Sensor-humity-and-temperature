<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Sistema de Sensores</title>
</head>
<body>

<h2>Home</h2>

      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#sensor">Gestion de sensores</button>
      <div id="sensor" class="collapse">
            <li>
                <a href="/sensor/create">Agregar sensor</a>
            </li>
            
            <li>
                <a href="/sensor">Visualizar sensores Registrados</a>
            </li>
      </div>
    </div>

      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#usuario">Gestion de Usuarios</button>
      <div id="usuario" class="collapse">
            <li>
                <a href="/usuario/create">Agregar usuario</a>
            </li>
            
            <li>
                <a href="/usuario">Usuarios Registrados</a>
            </li>
      </div>
    </div>


    
  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                           
                        </h1>

                         @yield('content') 

                      

                    </div>

                   
                </div>

            </div>
    

    </div>


</body>
</html>