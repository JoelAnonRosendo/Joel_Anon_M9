<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenda Diseny Modular</title>
    <link rel="stylesheet" href="./assets/css/hero.css">
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
                    <h3>Raton Razer DeathAdder V2</h3>
                    <img  src="./assets/img/ratonrazer1.jpg" alt="Razer Raton">
                    <p>Descripcion</p>
                    <br>
                    <p>Ratón USB con Cable para Juegos con interruptores ópticos</p>
                    <p><b>Precio:</b> 39,95€</p>
                    <input type="number" name="cantid_fresas" id="fresas">
                    <br>
                    <input class="boton" type="button" name="" value="Añadir al carrito">
                </div>
            </div>
            <div class="borde">
                <div class="separador">
                    <h3>SteelSeries Apex Pro Mini</h3>
                    <img  src="./assets/img/teclado.webp" alt="Teclado">
                    <p>Descripcion</p>
                    <br>
                    <p>Teclado Gaming Mecánico Inalámbrico US</p>
                    <p><b>Precio:</b> 199,99€</p>
                    <input type="number" name="cantid_fresas" id="fresas">
                    <br>
                    <input class="boton" type="button" name="" value="Añadir al carrito">
                </div>
            </div>
            <div class="borde">
                <div class="separador">
                    <h3>EFISH Alfombrilla de ratón</h3>
                    <img  src="./assets/img/alfombrilla.jpg" alt="Razer Raton">
                    <p>Descripcion</p>
                    <br>
                    <p>800 x 300 x 3 mm), alfombrilla de ratón lavable, alfombrilla de ratón de sobremesa para portátil, alfombrilla de ratón japonesa con base de goma antideslizante.</p>
                    <p><b>Precio:</b> 15,99€</p>
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
