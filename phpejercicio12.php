<?php

if(isset($_POST["button"])){
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $operation = $_POST["operation"];

    calculate($num1, $num2, $operation);
}
    function calculate($num1, $num2, $operation){
    switch ($operation){
        case "Suma":{
            $result = $num1 + $num2;
            echo "El resultado de la suma es: $result";
            break;
        }

        case "Resta":{
            $result = $num1 - $num2;
            echo "El resultado de la resta es: $result";
            break;
        }

        case "Multiplicación":{
            $result = $num1 * $num2;
            echo "El resultado de la multiplicación es: $result";
            break;
        }

        case "División":{
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "El resultado de la división es: $result";
            } else {
                echo "Error: División por cero";
            }
            break;
        }

        case "Modulo":{
            if ($num2 != 0) {
                $result = $num1 % $num2;
                echo "El resultado del módulo es: $result";
            } else {
                echo "Error: División por cero";
            }
            break;
        }

        default:
            echo "Error: Operación inválida";
    }
}

