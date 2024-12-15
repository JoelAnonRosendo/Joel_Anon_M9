<?php

    session_start();
    $_SESSION['user_login'];
    $user = $_POST['name_user'];
    $pass = $_POST['pass_user'];

    if ($user != $pass) {
        #	echo "Login incorrecte!";   
        session_destroy();     
        header("Location: ./tenda.php");
    }
    else {
        echo "<h1>Bienvenido:  $user</h1> <br>";
        $_SESSION['user_login']=$user;
        $_SESSION['log']=true;
        header("Location: ./tenda.php");
    }

?>