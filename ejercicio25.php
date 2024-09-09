<html>
<head>
    <title>Class</title>
</head>

<body>
<?php
    include ('claseejercicio25.php');

    $mazda = new Car(4, "gris", 1600);
    $pegaso = new Camion(9, "azul", 2600);

    echo "El Mazda tiene: $mazda->ruedas ruedas <br>";
    echo "El Pegaso tiene: $pegaso->ruedas ruedas <br>";

    $pegaso->frenar();

    $pegaso->seleccionarColor($pegaso->color, "Pegaso");

    $mazda->seleccionarColor($mazda->color, "Mazda");

    $pegaso->arrancar();
?>
</body>

</html>