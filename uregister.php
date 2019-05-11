<?php
    
    include "database.php";

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
    $email=$_POST['uemail'];
    $pass_1=$_POST['pswd'];
    $pass_2=$_POST['pswd2'];
    $user_image="images/user_default.png";

    if (strcmp($pass_1,$pass_2)==0) {
        $pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);

        $sql_validation ="SELECT * FROM usuarios WHERE email='$email' ";
    $result=$conn->query($sql_validation);

    if ($result->num_rows == 0) {
        $sql="INSERT INTO usuarios (firstname, lastname, email, password,photo) VALUES('$firstname','$lastname','$email','$pswd','$user_image')";

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
    
    
    

?>