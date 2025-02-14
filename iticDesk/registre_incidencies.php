<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="./acces.php">Home</a></button>
    <form action="./insert_incidencies.php" method="post">
        <label for="titulo">Titol:</label>
        <input type="text" name="titulo" id="titulo">
        <br><br>

        <label for="descripcio">Descripció:</label>
        <textarea name="descripcio" id="descripcio" cols="30" rows="10"></textarea>
        <br><br>

        <label for="tipus">Prioritat:</label>
        <select name="tipus" id="tipus">
            <option value="Tipo I">Tipus I</option>
            <option value="Tipus II">Tipus II</option>
            <option value="Tipus III">Tipus III</option>
            <option value="Tipus IV">Tipus IV</option>
        </select>
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>