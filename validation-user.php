<?php

    require_once "database.php";

    $useremail = $_POST['email'];
    $userpasswd = $_POST['pswd'];


        $sql_validation ="SELECT * FROM usuarios WHERE email='$useremail' ";
        $result=$conn->query($sql_validation);
    

	    if ($result->num_rows > 0) {
            
            $data  = $result->fetch_assoc();
            echo "<h1>".$data['email']."</h1>";
            $hash=$data['password'];
                
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