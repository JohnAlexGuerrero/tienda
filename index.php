<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tienda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php  

 
    if (empty($_GET['alert'])) {

        echo "";
   
   } elseif ($_GET['alert'] == 1) {

        echo "<div class='alert alert-danger alert-dismissable'>

        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-times-circle'></i> Error al entrar!</h4>
        Usuario o la contraseña es incorrecta, vuelva a verificar su nombre de usuario y contraseña.
        </div>";
   }elseif ($_GET['alert'] == 2) {

        echo "<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-check-circle'></i> Exito!!</h4>
        Has salido con éxito.</div>";

  }
      

?>
<br>
<div class="container col-sm-4">
  <h2>Login</h2>
  <form action="validation-user.php" method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="" autocompleted="off" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <button type="submit" class="btn btn-primary">Ingresar</button>
    <br>
    <a href="signup.php">Sign up</a>
  </form>
</div>

</body>
</html>
