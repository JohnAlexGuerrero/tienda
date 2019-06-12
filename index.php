<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAIH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta http-equiv="REFRESH" content="20; URL=index.php">
  <link rel="stylesheet" href="css/estilos.css">

</head>
<body class="">

<?php  

 
    if (empty($_GET['alert'])) {

        echo "";
   
   }elseif ($_GET['alert'] == 1) {

        echo "<div class='alert alert-danger alert-dismissable'>

        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-times-circle'></i> Error al entrar!</h4>
        La contraseña es incorrecta, vuelva a verificar su nombre de usuario y contraseña.
        </div>";
   }elseif ($_GET['alert'] == 2) {

    echo "<div class='alert alert-danger alert-dismissable'>

    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h4><i class='icon fa fa-times-circle'></i> Error al entrar!</h4>
    Datos incorrectos, vuelva a verificar su nombre de usuario y contraseña.
    </div>";

  }
      
?>
<br>

<div class="row">
  <div class="col-sm-6">
    <div class="container">
      <img src="images/01.jpg" alt="" width="190%">
    </div>
  </div>
  <div class="col-sm-6">

  <div class="container col-sm-5">
  <h2 class="text-center NormalBold">SAIH</h2>
  <p class="LetraSubtitulo">Por favor Iniciar Sección</p>
  <form action="validation-user.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" id="" autocompleted="off" placeholder="Numero de cédula" name="iduser">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
    </div>

    <button type="submit" class="btn btn-primary">Ingresar</button>
    <br>
  </form>
</div>
  </div>
</div>


</body>
</html>
