<?php

if (isset($_POST["enviando"])){

    $edad = $_POST["edadUsuario"];

    if($edad < 18){
        echo "Usted es menor de edad";
    } else if($edad <= 40){
        echo "Usted es un adulto joven";
    } else if($edad <= 65){
        echo "Usted es un adulto";
    }else{
        echo "Tiene un pie en la tumba";
    }
}