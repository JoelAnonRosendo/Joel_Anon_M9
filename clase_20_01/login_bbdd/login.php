<?php
session_start();
$conn = mysqli_connect("localhost", "janon", "joel", "test");


$_SESSION['user_login']='intento';
$user=$_POST['user_log'];
$password=$_POST['pswd'];

// consulta base de datos

if(!$conn){
    echo "No se ha podido conectar a la BBDD";
}
else {
    $sql = "SELECT * FROM login WHERE id_usuario = $user AND contraseña = $password";

    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
	if($rows > 0){
		$_SESSION['user_login']=$user;
		header('Location: ./login_correct.php');
	}
	else {
		header('Location: ./index.html');
	};
}
?>
