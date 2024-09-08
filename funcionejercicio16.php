<?php

if (isset($_POST["enviando"])){

    $nombre = $_POST["nombreUsuario"];
    $contra = $_POST["contra"];

    /*if($edad < 18){
        echo "Eres menor de edad. No tienes acceso";
    }else{
        echo "Eres mayor de edad. Puedes acceder";
    }
    */

    $resultado = $nombre == "Juan" && $contra == "12345" ? "Puedes acceder" : "No puede acceder";

    echo $resultado;
}