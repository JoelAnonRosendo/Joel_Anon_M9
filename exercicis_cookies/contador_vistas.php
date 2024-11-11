<?php
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
