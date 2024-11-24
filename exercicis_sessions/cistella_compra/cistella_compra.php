<?php
    session_start();
    $checkfresa = $_POST["seleccion_fresas"];
    $checkplatano = $_POST["seleccion_platano"];
    $checksandia = $_POST["seleccion_sandia"];
    if ($checkfresa == "on"){
        if ($_POST["cantid_fresa"] == ""){
            $_POST["cantid_fresa"] = "0";
        }
        $cantidadfresas = $_POST["cantid_fresas"];
        $_SESSION["fresas"] = $cantidadfresas;
    }
    if ($checkplatano == "on"){
        if ($_POST["cantid_platano"] == ""){
            $_POST["cantid_platano"] = "0";
        }
        $cantidadplatano = $_POST["cantid_platano"];
        $_SESSION["platano"] = $cantidadplatano;
    }
    if ($checksandia == "on"){
        if ($_POST["cantid_sandia"] == ""){
            $_POST["cantid_sandia"] = "0";
        }
        $cantidadsandia = $_POST["cantid_sandia"];
        $_SESSION["sandia"] = $cantidadsandia;
    }
    // echo "fresas = $cantidadfresas , platano = $cantidadplatano , sandia = $cantidadsandia"
    header('Location: index.html');
?>