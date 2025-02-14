<?php
session_start();
$conn = mysqli_connect("localhost", "janon", "joel", "joel_anon_iticdesk");


$_SESSION['user_login']='intento';
$user=$_POST['user_log'];
$password=$_POST['pswd'];

// consulta base de datos

if(!$conn){
    echo "No se ha podido conectar a la BBDD";
}
else {
    $sql = "SELECT * FROM `usuaris` WHERE `email` = '$user' AND contrasenya = '$password'";
	echo $sql;
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
	echo $rows;
	if($rows > 0){
		while($row = mysqli_fetch_array($query)){
        
			$user = $row["nom"];
			$rol = $row["rol"];
			$id_user = $row["id"];
	
		}
		$_SESSION['user_login']=$user;
		$_SESSION['id_user']=$id_user;
		$_SESSION['log']=true;
		$_SESSION['rol']=$rol;
		header('Location: ./acces.php');
	}
	else {
		header('Location: ./index.html');
		echo "Usuario o contraseña incorrectos";
	};
}
?>
