<html>
<head>
    <title>Array II</title>
</head>

<body>

<?php

    $alimentos = array("fruta"=>array("tropical"=>"kiwi",
                                      "citrico"=>"mandarina",
                                      "otros"=>"manzana"),

                       "leche"=>array("animal"=>"vaca",
                                      "vegetal"=>"coco"),

                       "carne"=>array("vacuno"=>"lomo",
                                       "porcino"=>"pata"));

    //echo $alimentos["carne"] ["vacuno"];

    foreach($alimentos as $comida => $datos){

        echo "<h2>$comida</h2>";

        foreach($datos as $tipo => $descripcion){

            echo "<h3>$tipo</h3>";
            echo "<ul>";

            foreach($descripcion as $alimento){

                echo "<li>$alimento</li>";

            }
            
            echo "</ul>";
        }
    }


    //Desactualizado
    /*
    foreach($alimentos as $comida=>$datos){
        echo "<h2>$comida</h2>";

        while (list($nombre,$valor)=each($datos)){
            echo "$nombre=$valor";
        }

        echo "<br>";
    }
    */
?>

</body>

</html>