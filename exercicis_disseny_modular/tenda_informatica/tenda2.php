<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/hero.css">
    <title>Tenda Diseny Modular</title>
</head>
<body>
    <header>
        <?php
            require_once("./header.php");
        ?>
    </header>
    <form action="" method="post">
        <div class="container">
            <div class="borde">
                <div class="separador">
                    <h3>JBL Tune 510 BT - Negro</h3>
                    <img  src="./assets/img/auriculares.jpg" alt="Razer Raton">
                    <p>Descripcion</p>
                    <br>
                    <p>BLUETOOTH INALÁMBRICO: estos auriculares transmiten de forma inalámbrica desde su dispositivo e incluso pueden cambiar entre dos dispositivos para que no se pierda una llamada</p>
                    <p><b>Precio:</b> 36,99€</p>
                    <input type="number" name="cantid_fresas" id="fresas">
                    <br>
                    <input class="boton" type="button" name="" value="Añadir al carrito">
                </div>
            </div>
            <div class="borde">
                <div class="separador">
                    <h3>HLONONE Mesa Gaming</h3>
                    <img  src="./assets/img/mesa.jpg" alt="Teclado">
                    <p>Descripcion</p>
                    <br>
                    <p>120 × 60cm LED Mesa Gaming, Escritorio Gaming de Fibra de Carbono Ergonómicas, Escritorio Gamer con Portavasos y Gancho para Auriculares, Negro</p>
                    <p><b>Precio:</b> 94,99€</p>
                    <input type="number" name="cantid_fresas" id="fresas">
                    <br>
                    <input class="boton" type="button" name="" value="Añadir al carrito">
                </div>
            </div>
            <div class="borde">
                <div class="separador">
                    <h3>T-LOVENDO.ES Silla Tipo Gaming Racer X</h3>
                    <img  src="./assets/img/silla.jpg" alt="Razer Raton">
                    <p>Descripcion</p>
                    <br>
                    <p>Ergonómica Racing Sillón Gamer Profesional para Videojuegos, PC, Ordenador, Oficina, Estudio. Cojín Lumbar y Cervical. Regulable en Altura y reclinable.</p>
                    <p><b>Precio:</b> 93,49€</p>
                    <input type="number" name="cantid_fresas" id="fresas">
                    <br>
                    <input class="boton" type="button" name="" value="Añadir al carrito">
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <a href="./tenda.php"><button>1</button></a>
        <a href="./tenda2.php"><button>2</button></a>
    </div>
    <footer>
        <?php
            require_once("./footer.php");
        ?>
    </footer>
</body>
</html>