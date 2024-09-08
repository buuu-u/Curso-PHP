<?php

if (isset($_POST["enviando"])){

    $edad = $_POST["edadUsuario"];
    $nombre = $_POST["nombreUsuario"];

    switch ($nombre){

        case "Pedro":
            echo "Bienvenido Pedro. Puedes acceder";
            break;
        case "Juan":
                echo "Bienvenido Juan. Puedes acceder";
                break;

        case "Maria":
            echo "Bienvida Maria. Puedes acceder";
            break;

        default:
                echo "Usted no es Pedro, Juan ni Maria";
                break;

    }

    /*if($edad < 18){
        echo "Usted es menor de edad";
    } else if($edad <= 40){
        echo "Usted es un adulto joven";
    } else if($edad <= 65){
        echo "Usted es un adulto";
    }else{
        echo "Tiene un pie en la tumba";
    }*/


}