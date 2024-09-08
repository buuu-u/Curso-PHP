<?php

if (isset($_POST["enviando"])){

    $contra = $_POST["contra"];
    $nombre = $_POST["nombreUsuario"];

    switch (true){

        case $nombre=="Pedro" && $contra=="1234":
            echo "Bienvenido Pedro. Puedes acceder";
            break;
        case $nombre=="Juan" && $contra=="5555":
                echo "Bienvenido Juan. Puedes acceder";
                break;

        case $nombre=="Maria" && $contra=="1111":
            echo "Bienvenida Maria. Puedes acceder";
            break;

        default:
                echo "Usted no es Pedro, Juan, ni Maria";
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