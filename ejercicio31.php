<html>
<head>
    <title>Array</title>
</head>

<body>

    <?php

    $array= array("Lunes", "Martes", "Miercoles", "Jueves");

    //Function sort() Ordena la array
    sort($array);

    /*//Function is_array() comprueba si la variable es un array
    if (is_array($array)){
        echo "Es un array <br>";
    }else{
        echo "No es un array <br>";
    }
    */

    //function count() obtiene la cantidad de elementos en la array
    for($i=0; $i<count($array); $i++) {
        echo $array[$i] . "<br>";
    }
    
    ?>

</body>

</html>