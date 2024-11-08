<?php
// El código se basa en un contador de visitas que utiliza una cookie (visitas)
// que se incrementa cada vez que el usuario accede a la página de la tienda.
// En caso de que el usuario realice 5 visitas, se le muestra un descuento del 20%,
// y si llega a 10 visitas, se le ofrece un 50% de descuento.
// Pero, si el usuario ya ha realizado una compra con descuento, esta quedará registrada
// en otra cookie (compra_realizada) y no se le ofrecerá ningún descuento adicional.
// Para que se puedan aplicar otra vez los descuentos, las cookies deben ser borradas,
// así otro usuario podrá tener su descuento y de esta manera con el resto de usuarios.
	if (isset($_COOKIE['visitas'])) {
    		$visitas = $_COOKIE['visitas'] + 1;
	} else {
    		$visitas = 1;
	}
	setcookie('visitas', $visitas, time() + (365 * 24 * 60 * 60));

	$descuento = 0;
	if (isset($_COOKIE['compra_realizada'])) {
    		$descuento = 0;
	} else {
    		if ($visitas >= 10) {
        		$descuento = 50;
    		} elseif ($visitas >= 5) {
        		$descuento = 20;
    		}
	}
?>
