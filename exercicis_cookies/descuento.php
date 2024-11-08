<?php
//Este codigo se encarga de verificar si el usuario envió la solicitud de compra y segun
//el numero de visitas registradas en la cookie se le aplicará un descuento del 20% o 50%.
if (isset($_POST['comprar']) || isset($_POST['aplicar_descuento'])) {
    if (isset($_COOKIE['visitas'])) {
        $visitas = $_COOKIE['visitas'];
        $descuento = 0;

        if (!isset($_COOKIE['compra_realizada'])) {
            if ($visitas >= 10) {
                $descuento = 50;
            } elseif ($visitas >= 5) {
                $descuento = 20;
            }
        }

        if ($descuento > 0) {
            echo "Se ha aplicado un descuento del $descuento% a tu compra.";
            setcookie('compra_realizada', '1', time() + (365 * 24 * 60 * 60));
        } else {
            echo "No hay descuento disponible en esta compra.";
        }
    }
} else {
    echo "Error: solicitud de compra no válida.";
}
?>
