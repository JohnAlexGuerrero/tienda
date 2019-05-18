<?php
    
    include "database.php";

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
    $cedula=$_POST['ucedula'];
    $email=$_POST['uemail'];
    $pass_1=$_POST['pswd'];
    $pass_2=$_POST['pswd2'];
    $name_photo=$_FILES['photo']['name'];
    $type_photo=$_FILES['photo']['type'];
    $size_photo=$_FILES['photo']['size'];
    
    echo $cedula.".".$type_photo;
    move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$name_photo);
    /*
    if (empty($name_photo) && empty($type_photo) && empty($size_photo)) {
        $ruta="images/user_default.png";
    }else {
        move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$cedula.".");
        $ruta="photos/".$cedula;
    }
    
    
    if (strcmp($pass_1,$pass_2)==0) {
        $pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);

        $sql_validation ="SELECT * FROM usuarios WHERE email='$email' ";
        $result=$conn->query($sql_validation);

    if ($result->num_rows == 0) {
        $sql="INSERT INTO usuarios (firstname, lastname, email, password,photo)
         VALUES('$firstname','$lastname','$email','$pswd','$ruta')";//$user_image

        if ($conn->query($sql)===true) {
            echo "<script languaje='javascript'>alert('Usuario regisrado con exito')</script>";
            header("refresh:0;url=index.php");
            
        }else{
            echo "Error:".$sql."<br>".$conn->error;
        }    
    }else {
        echo "<script languaje='javascript'>alert('Usuario ya está regisrado ')</script>";
            header("refresh:0;url=signup.php");
            
    }

    }else {
        echo "<script languaje='javascript'>alert('Contraseñas no son iguales')</script>";
            header("refresh:0;url=signup.php");
    }
    
    
    
*/
?>