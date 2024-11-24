<?php
    session_start();
    session_unset();
    session_destroy();
    echo"Compra realizada con exito";
    echo "<br><br>";
    echo "<a href='./index.html'><button>Inicio</button></a>";
?>