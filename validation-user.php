<?php

    require_once "database.php";

    $useremail = $_POST['email'];
    $userpasswd = $_POST['pswd'];

    function user_exist($email) {

        $sql_user_exist ="SELECT * FROM usuarios WHERE email='$email'";
    
        $conn_conexion=conexion();

	    $rows  = $conn_conexion->query($sql_user_exist);
        if(rows > 0){
        //if ($result->num_rows > 0) {
            $data  = $rows->fetch_assoc();
            $hash=$data['password'];
                
                if (password_verify($userpasswd, $hash)) {
                    $flap=true;
                } else {
                    $flap=false;
                    echo "password no es correcto.";
                }
        }
        
        return $flap;
    }


    if (user_exist($useremail)){
        header("refresh:0;url=main.php");
        //header("Location: main.php?module=start");
	
    }else{
        header("refresh:0;url=index.php?alert=1");
    } 

?>