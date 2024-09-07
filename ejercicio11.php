<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Operator</title>
</head>

<body>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
    <p>
        <label for="number1"></label>
        <input type="text" name="number1" id="number1">
        <label for="number2"></label>
        <input type="text" name="number2" id="number2">
        <label for="operation"></label>
        <select name="operation" id="operation">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Modulo</option>
        </select>
    </p>

    <p>
        <input type="submit" name="button" id="button" value="enviar" onclick="prueba">
    </p>
</form>
<p>&nbsp;</p>

<?php
    if(isset($_POST["button"])){
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $operation = $_POST["operation"];

        switch ($_POST["operation"]){
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
                $result = $num1 / $num2;

                echo "El resultado de la división es: $result";
                break;
            }

            case "Modulo":{
                $result = $num1 % $num2;

                echo "El resultado del módulo es: $result";
                break;
            }
        }
    }
?>
</body>

</html>