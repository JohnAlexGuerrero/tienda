<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="REFRESH" content="20; URL=index.php">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>SAIH</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
    <a class="navbar-brand col-sm-10" href="../"><h2>SAIH</h2></a>
      <!-- Links -->
    <ul class="navbar-nav">
        
        <li class="nav-item active">
        <div class="container col-sm-2">
            <a href="" class="nav-link">
                <img src="../../images/user_default.png" alt="" class="mr-3 mt-3 rounded-circle" width="35px">
            </a>
        </div>
        </li>
    </ul>
</nav>

<div class="container">
    <div class="box-container">
        <div class="alert alert-success">
            <strong>Pacientes</strong> 
        </div>
        <div class="row">
            <div class="col-sm-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo afiliado</button>
            </div>
            <div class="col-sm-4">
            <input class="form-control" id="myInput" type="text" placeholder="Buscar paciente">
            </div>
        </div>
        <div class="container mt-3">
            <p>Pacientes afiliados a SAIH</p>  
  
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Historia clinica</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody id="myTable">
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>HU23423</td>
                    <td><a href=""><img src="../../images/modificar-icon.png" alt="" width="20"></a></td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@mail.com</td>
                    <td>HU23423</td>
                    <td><a href=""><img src="../../images/modificar-icon.png" alt="" width="20"></a></td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@greatstuff.com</td>
                    <td>HU23423</td>
                    <td><a href=""><img src="../../images/modificar-icon.png" alt="" width="20"></a></td>
                </tr>
                <tr>
                    <td>Anja</td>
                    <td>Ravendale</td>
                    <td>a_r@test.com</td>
                    <td>HU23423</td>
                    <td><a href=""><img src="../../images/modificar-icon.png" alt="" width="20"></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <p>Encuentra toda la información de los pacientes y afiliados</p>
        <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nuevo afiliado</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" methd="post">
            <div class="form-group">
                <label for="email">Nombres</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="email">Apellidos</label>
                <input type="text" class="form-control" id="lastname" placeholder="" name="lastname">
            </div>
            <div class="form-group">
                <label for="email">tipo documento</label>
                <select name="type-doc" id="" class="form-control">
                    <option value="0">-Seleccione-</option>
                    <option value="1">cédula de ciudadania</option>
                    <option value="0">Targeta de identidad</option>
                    <option value="0">otro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Nro. documento</label>
                <input type="number" class="form-control" id="lastname" placeholder="" name="lastname">
            </div>
            <div class="form-group">
                <label for="email">sexo</label>
                <select name="type-sex" id="" class="form-control">
                    <option value="0">-Seleccione-</option>
                    <option value="1">Masculino</option>
                    <option value="0">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


  </body>
</html>