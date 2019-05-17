<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
   
   } elseif ($_GET['alert'] == 2) {

        echo "<div class='alert alert-danger alert-dismissable'>

        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-times-circle'></i> Error al entrar!</h4>
        Usuario o la contraseña es incorrecta, vuelva a verificar su nombre de usuario y contraseña.
        </div>";
   }elseif ($_GET['alert'] == 1) {

        echo "<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-check-circle'></i> Registrate!!</h4>
        Usuario no se encuentra registrado.</div>";

  }
      
?>

<div class="container col-sm-6">
  <h2>Sign Up</h2>
  <p>Formulario de registro de usuarios</p>
  <form action="uregister.php" method="post" class="was-validated" enctype="multipart/form-data">
    <div class="form-group">
      <label for="uname">Fisrtname:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Lastname:</label>
      <input type="text" class="form-control" id="ulastname" placeholder="Enter Lastname" name="ulastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Confirmar password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd2" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Abjuntar foto:</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter your photo" name="photo">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

</body>
</html>
