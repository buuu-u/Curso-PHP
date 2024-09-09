<html>
<head>
    <title>Class</title>
</head>

<body>
<?php
include ('claseejercicio27.php');

$mazda = new Car(4, "gris", 1600);
$pegaso = new Camion(9, "azul", 2600);

echo "El Mazda tiene: " . $mazda->getRuedas() . " ruedas<br>";
echo "El Pegaso tiene: " . $pegaso->getRuedas() . " ruedas<br>";

?>
</body

</html>