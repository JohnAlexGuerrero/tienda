<?php

    include 'database.php';

    $useremail=$_POST['email'];
    $userepasswd=$_POST['pswd'];


    function user_exist($email) {

        $sql_user_exist="SELECT * FROM usuarios WHERE email='$email'";
        $result=$conn->query($sql_user_exist);

        if ($result->num_rows > 0) {
            $flap=true;
        }else {
            $flap=false;
        }
        
        return $flap;
        
    }
        
    if (user_exist($useremail)) {
        header("refresh:0;url=index.php?alert=1");
    }    


?>