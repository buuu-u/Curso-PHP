<html>
<head>
    <title>Class</title>
</head>

<body>
<?php
include ('claseejercicio28.php');


$antonio = new buyCar("Midsize");

buyCar::applyDiscount();

$antonio -> climatizador();

$antonio -> tapiceriaCuerto('White');

echo $antonio->priceFinal();

?>
</body

</html>