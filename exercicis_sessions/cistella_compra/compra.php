<?php
    session_start();
    $cantidadfresa = $_SESSION["fresas"];
    $cantidadplatano = $_SESSION["platano"];
    $cantidadsandia = $_SESSION["sandia"];
    $totalfresas = $cantidadfresa * 5.5;
    $totalplatano = $cantidadplatano * 3.99;
    $totalsandia = $cantidadsandia * 10.9;
    
    $suma = $totalfresas + $totalplatano + $totalsandia;
    echo "Compra";
    echo "<br>";
    echo "Fresas / $cantidadfresa / 5,5€/unidad|";
    echo "<br>";
    echo "Platano / $cantidadplatano / 3,99€/unidad";
    echo "<br>";
    echo "Sandia / $cantidadsandia / 10,9€/unidad";
    echo "<br>";
    echo "Total = $suma";
    echo "<br><br>";


    echo"<a href='./finalizar.php'><button>Pagar</button></a>";
?>