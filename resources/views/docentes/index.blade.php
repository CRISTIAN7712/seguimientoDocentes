@extends('../templates.template')
@extends('../templates.nav')
@section('titulo','Sistema de Seguimiento')
@section('content')
<h1>Bienvenido Docente</h1>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="" method="post">
                    <label for="Nombre">Nombre:</label>
                    <input class="form-control" type="text" name="Nombre" id="" value="Escribe tu nombre">                    
                    <label  for="Apellido">Apellido:</label>
                    <input class="form-control" type="text" apellido="Apellido" id="" value="Escribe tu apellido">                    
                    <label for="Cedula">Cedula:</label>
                    <input class="form-control" type="text" name="Cedula" id="" value="Digite su cedula">
                    <label for="Celular">Cedula:</label>
                    <input class="form-control" type="text" name="Celular" id="" value="Numero telefonico">
                    <label for="Correo">Correo:</label>
                    <input class="form-control" type="text" name="Correo" id="" value="Correo electronico">
                    <label for="Contraseña">Contraseña:</label>
                    <input class="form-control" type="password" name="Contraseña" id="" >
                    <br><input class="form-control btn btn-success btn-block" type="submit" value="Guardar Datos">
                </form>
            </div>

        </div>
        
        <div class="col-md-8">
            <div class="card card-body">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
        
        </div>

    </div>

</div>

@endsection