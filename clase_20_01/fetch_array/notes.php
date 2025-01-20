<?php


$nota = $_GET['nota'];

$conn = mysqli_connect("localhost", "janon", "joel", "test");

if(!$conn){
    echo "No se ha podido conectar a la BBDD";
}
else {

    $sql = "SELECT * FROM usuaris WHERE nota >= 5";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($query)){
        
        echo "Nombre: " . $row["nom"] ."Apellido: ". $row["cognom"] . "<br>";

    }



    #$sql = "SELECT * FROM usuaris WHERE nota > $nota";
    #$query = mysqli_query($conn, $sql);
    #$rows = mysqli_num_rows($query);
    #echo "Hay $rows alumnos con mas de un $nota .";

    // $query = mysqli_query($conn, "INSERT INTO usuaris VALUES ('48215685A', 'Joel', 'Anon', '7')");
    // $consulta = mysqli_affected_rows($conn);
}
?>