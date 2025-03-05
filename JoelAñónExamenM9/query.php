<?php
$conn=mysqli_connect("localhost", "joelAnonExam", "Admin1234", "joelAnonExam");
$puntuacion=$_POST["puntuacion"];
echo "Selección usuario: $puntuacion";
$sql="SELECT TITULO,ANYO FROM `peliculas` WHERE PUNTUACION > $puntuacion;";
$query=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query)){
    echo $row['TITULO'];
    echo $row['ANYO'];
}
?>
