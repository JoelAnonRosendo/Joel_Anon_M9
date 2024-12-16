<?php

    $conn = mysqli_connect("localhost","janon","joel", "test");
    if(!$conn){
        echo "No s'ha pogut connectar a la base de dades";
    }
    else{
        echo"OK";
    }
?>
