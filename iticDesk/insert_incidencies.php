<?php

$conn = mysqli_connect("localhost", "janon", "joel", "joel_anon_iticdesk");

session_start();
if(! isset($_SESSION['log'])){
    header("Location: index.html");
}

date_default_timezone_set('UTC');
$fecha=date('l jS \of F Y h:i:s A');


$id_user=$_SESSION['id_user'];
$titulo=$_POST['titulo'];
$descripcio=$_POST['descripcio'];
$tipus=$_POST['tipus'];

if(!$conn){
    echo "No se ha podido conectar a la BBDD";
}
else {
    $query = mysqli_query($conn,"INSERT INTO `incidencies`(`prioritat`, `titol`, `descripcio`, `usuari_id`, `data_creacio`, `estat`) VALUES ('$tipus', '$titulo', '$descripcio', '$id_user', '$fecha', 'Oberta')");
    
    //Comprobar si se ha insertado correctamente
    //echo "INSERT INTO `incidencies`(`id`, `prioritat`, `titol`, `descripcio`, `usuari_id`, `data_creacio`, `estat`) VALUES ('$tipus', '$titulo', '$descripcio', '$id_user', '$fecha', 'Oberta')";
    echo "Incidencia registrada";    
}
?>
<hr><br><br>
<button><a href="./registre_incidencies.php">Añadir otra</a></button>
<button><a href="./acces.php">Volver al inicio</a></button>