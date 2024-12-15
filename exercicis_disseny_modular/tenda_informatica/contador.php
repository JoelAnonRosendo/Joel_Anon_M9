<?php
    session_start();
    // Parell o Inparell text header

    if(! isset($_SESSION['log'])){
        if ( $_COOKIE['visita']% 2 == 0){
            echo 'Benvingut de nou, esperem que tingui un bon dia';
        }   
        else{
            echo 'Benvingut, és un plaer que ens visitis';
        }
    }
    if ( $_COOKIE['visita']% 2 == 0){
        echo 'Benvingut de nou, esperem que tingui un bon dia ';
        echo $_SESSION['user_login'];
    }   
    else{
        echo 'Benvingut, és un plaer que ens visitis';
        echo $_SESSION['user_login'];
    }

    require_once("./descomptes.php");

    //-----------------------------------------------------------------------------------
    // implementacion cookie
    if(isset($_COOKIE['visita'])){
        $visita = $_COOKIE['visita'];
        $visita_output = $visita+1;
        echo "Visita nº $visita_output";
        setcookie('visita', $visita+=1);
    }
    else{
        echo "Visita nº: 1";
        setcookie('visita',1);
    }
?>