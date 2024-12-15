<?php

    if(! isset($_SESSION['log'])){
        if ( $_COOKIE['visita'] == 19){
            echo 'Agraïm la seva fidelitat, utilitzi el codi PROMO24 per un 20% de descompte';
            echo'<br>';
        }
    }

    if( isset($_SESSION['log'])){
        if ( $_COOKIE['visita'] == 9){
            echo $_SESSION['user_login'];
            echo(', agraïm la seva fidelitat, utilitzi el codi PROMO24 per un 30% de descompte');
        }    
    }

?>