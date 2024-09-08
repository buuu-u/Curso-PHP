<html>
<head>
    <title>Function</title>
</head>

<body>

<?php

    function fraseMayus($frase, $convertion=true)
    {
        $frase = strtolower($frase);

        if ($convertion) {
            $result = ucwords($frase);
        }else {
            $result = strtoupper($frase);
        }

        return $result;
    }

    echo fraseMayus("esto es una prueba", false);

?>
</body>

</html>