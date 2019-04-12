<?php

    include"database.php";

    $codigo=$_POST['cod_pro'];
    $nombre=$_POST['nom_pro'];
    $cantidad=$_POST['cantidad'];

    $sql="INSERT INTO productos (codigo_prod,nombre_prod,cantidad)VALUES('$codigo','$nombre',$cantidad)";

    if ($conn->query($sql)===true) {
        echo "<script languaje='javascript'>alert('Producto regisrado con exito')</script>";
        header("refresh:0; url=index.php");
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }

?>