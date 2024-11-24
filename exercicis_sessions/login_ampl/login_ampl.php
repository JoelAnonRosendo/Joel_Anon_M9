<?php
    session_start();
    $usuari = $_POST["user"];
    $paswd = $_POST["passwd"];
    $_SESSION["user"]=$usuari;
    if ($_SESSION["user"] == $paswd){
        header('Location: informacion_ampl.php');
    }
    else{
        echo("No ha sido posible, prueba a intentarlo de nuevo.");
        echo("<a href='./desloguejar.php'><button>Desloguejar</button></a>");
        echo("<br><br><a href='./index.html'><button>NEXT</button></a>");
        
    }

    
?>