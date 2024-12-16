<?php

    $conn = mysqli_connect("localhost","janon","joel", "test");
    if(!$conn){
        echo "No s'ha pogut connectar a la base de dades";
    }
    else{
        echo"OK";
    }
    $query = mysqli_query($conn, "Insert into users VALUES('54174087T','Johan','Ponze')");
?>
