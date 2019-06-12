<?php

    require_once "databases/db.php";

    $iduser = $_POST['iduser'];
    $userpasswd =md5($_POST['pswd']) ;


        $sql_validation ="SELECT * FROM usuarios WHERE usuario='$iduser' and password='$userpasswd' ";
        $result=$conn->query($sql_validation);
    

	    if ($result->num_rows > 0) {
            
            $data  = $result->fetch_assoc();
            session_start();

		$_SESSION['id_user']   = $data['id_user'];

		$_SESSION['username']  = $data['username'];

		$_SESSION['password']  = $data['password'];

		$_SESSION['name_user'] = $data['name_user'];

		$_SESSION['permisos_acceso'] = $data['permisos_acceso'];

	
		header("Location: main.php?module=start");
	
                
                if (password_verify($userpasswd, $hash)) {
                    header("refresh:0;url=main.php");
                } else {
                    $flap=false;
                    echo "password no es correcto.";
                    header("refresh:0;url=index.php?alert=1");
                }
        }else{
            header("refresh:0;url=signup.php?alert=1");
        }
      

?>