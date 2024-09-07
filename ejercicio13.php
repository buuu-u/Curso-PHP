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
            <option>Incremento</option>
            <option>Decremento</option>
        </select>
    </p>

    <p>
        <input type="submit" name="button" id="button" value="enviar" onclick="prueba">
    </p>
</form>

<p>&nbsp;</p>

<?php

    include "funcionejercicio13.php";

        if(isset($_POST["button"])){
          $num1 = $_POST["number1"];
          $num2 = $_POST["number2"];
          $operation = $_POST["operation"];

          calculate($num1, $num2, $operation);
    }

?>

</body>

</html>