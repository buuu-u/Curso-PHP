<html>
<head>
    <title>Array</title>
</head>

<body>

    <?php

    $array= array("Lunes", "Martes", "Miercoles", "Jueves");

    //Function sort() Ordena la array
    sort($array);

    //function count() obtiene la cantidad de elementos en la array
    for($i=0; $i<count($array); $i++) {
        echo $array[$i] . "<br>";
    }
    
    ?>

</body>

</html>