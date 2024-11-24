<?php
    session_start();
    $usuari = $_POST["user"];
    $paswd = $_POST["passwd"];
    $_SESSION["user"]=$usuari;
    if ($_SESSION["user"] == $paswd){
        header('Location: informacion.php');
    }
    else{
        echo("No ha sido posible, prueba a intentarlo de nuevo.");
        echo("<br><br><a href='./index.html'><button>NEXT</button></a>");
        
    }

    
?>