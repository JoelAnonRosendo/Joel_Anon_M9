<?php
include 'header.php';
?>

<button><a href="./acces.php">Home</a></button>
<br><br>


<?php

$conn = mysqli_connect("localhost", "janon", "joel", "joel_anon_iticdesk");

session_start();
if(! isset($_SESSION['log'])){
    header("Location: index.html");
}

$id_user=$_SESSION['id_user'];
$rol=$_SESSION["rol"];
echo $rol;
if(!$conn){
    echo"<br><br>";
    echo "No se ha podido conectar a la BBDD";
}
else {
    if ($rol == 'administrador'){
        $sql = "SELECT * FROM `incidencies` ORDER BY prioritat ASC, data_creacio ASC;";
        $query = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($query);
        if($rows > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "Prioritat";
            echo "</th>";
            echo "<th>";
            echo "Titol";
            echo "</th>";
            echo "<th>";
            echo "Descripcio";
            echo "</th>";
            echo "<th>";
            echo "Usuari_id";
            echo "</th>";
            echo "<th>";
            echo "Data_creacio";
            echo "</th>";
            echo "<th>";
            echo "Estat";
            echo "</th>";
            while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>";
                echo $row['prioritat'];
                echo '</td>';
                echo '<td>';
                echo $row['titol'];
                echo '</td>';
                echo '<td>';
                echo $row['descripcio'];
                echo '</td>';
                echo '<td>';
                echo $row['usuari_id'];
                echo '</td>';
                echo '<td>';
                echo $row['data_creacio'];
                echo '</td>';
                echo '<td>';
                echo $row['estat'];
                echo '</td>';
                echo "</tr>";
            }
        }
        else{
            echo"<br><br>";
            echo "No hi ha incidencies";
        }
		
	}
	else {
        $sql = "SELECT * FROM `incidencies` where usuari_id = $id_user";
        $query = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($query);
        echo $rows;
        if($rows > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "Prioritat";
            echo "</th>";
            echo "<th>";
            echo "Titol";
            echo "</th>";
            echo "<th>";
            echo "Descripcio";
            echo "</th>";
            echo "<th>";
            echo "Usuari_id";
            echo "</th>";
            echo "<th>";
            echo "Data_creacio";
            echo "</th>";
            echo "<th>";
            echo "Estat";
            echo "</th>";
            while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>";
                echo $row['prioritat'];
                echo '</td>';
                echo '<td>';
                echo $row['titol'];
                echo '</td>';
                echo '<td>';
                echo $row['descripcio'];
                echo '</td>';
                echo '<td>';
                echo $row['usuari_id'];
                echo '</td>';
                echo '<td>';
                echo $row['data_creacio'];
                echo '</td>';
                echo '<td>';
                echo $row['estat'];
                echo '</td>';
                echo "</tr>";
            }
        }
        else{
            echo "No hi ha incidencies";
        }
	};
}

?>