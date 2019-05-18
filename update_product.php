<?php
    
    include "database.php";

    $codigo=$_POST['codigo'];
    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];
    $costo=$_POST['costo'];
    $name_photo=$_FILES['foto']['name'];
    $type_photo=$_FILES['foto']['type'];
    $size_photo=$_FILES['foto']['size'];
    

    if (empty($name_photo) && empty($type_photo) && empty($size_photo)) {
        $ruta="productos_images/user_default.png";
    }else {
        move_uploaded_file($_FILES['foto']['tmp_name'],"photos/".$name_photo);
        $ruta="productos_images/".$name_photo;
    }
    
    $sql="UPDATE productos SET cantprod='$cantidad',pcosto='$costo',imagen='$ruta' WHERE codprod='$codigo'";

    if ($conn->query($sql)==true) {
        echo "actulizacion correcta";
    }else {
        echo "error";
    }
  ?>