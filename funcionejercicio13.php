<?php
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

        case "Incremento":{
                $num1++;
                $result = $num1;
                echo "El resultado del incremento es: $result";
            break;
        }

        case "Decremento":{
            $num1--;
            $result = $num1;
            echo "El resultado del Decremento es: $result";
            break;
        }

        default:
            echo "Error: Operación inválida";
    }
}