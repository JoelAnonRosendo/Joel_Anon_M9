<?php 
session_start(); 
if(! isset($_SESSION['log'])){
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
    <header>
        <h1 style="color: #333; text-align: center; font-size: 36px; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
            Hola, bienvenido 
            <?php 
                echo $_SESSION['user_login']; 
            ?>
        </h1>
        <h2>
                Rol: 
            <?php
                echo $_SESSION['rol'];
            ?>
        </h2>
        <button><a href="logout.php">Logout</a></button>
        <br><hr>
    </header>
<body style="background-color: #A9F5F2;">
	
</body>
</html>