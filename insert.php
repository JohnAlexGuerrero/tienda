<?php

    include"database.php";

    $codigo=$_POST['cod_pro'];
    $nombre=$_POST['nom_pro'];
    $cantidad=$_POST['cantidad'];

    $sql="INSERT INTO productos (codigo_prod,nombre_prod,cantidad)VALUES('$codigo','$nombre',$cantidad)";

    if ($conn->query($sql)===true) {
        echo "Producto registrado con exito";
        echo "<br><a href='index.php'>regresar</a>";
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }

?>