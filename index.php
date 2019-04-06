<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="cotenedor">
    <form action="insert.php" method="post">
        <div>
        <label for="">Mi Tienda Registro de Productos</label>
        </div>
        <div class="" name="">
        <label for="">Còdigo del Producto:</label>
        <input type="text" maxleght="7" name="cod_pro">
        </div>
        <div class="" name="">
        <label for="">Nombre del Producto:</label>
        <input type="text" maxleght="20" name="nom_pro">
        </div>
        <div class="" name="">
        <label for="">Cantidad:</label>
        <input type="number"  name="cantidad">
        </div>
        <div class="" name="">
        <label for="">Imagen:</label>
        <input type="text" maxleght="50" name="imagen">
        <input type="file" value="Examinar" >
        </div>
        <div>
        <input type="submit" value="Registrar">
        </div>
    </form>
    </div>
    
</body>
</html>

<?php
    include "database.php";
     ?>
