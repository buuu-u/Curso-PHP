<html lang="">
<head>
    <title>Function</title>
</head>

<body>

<?php

    function mayus(&$param){
     $param = strtolower($param);
     $param = ucwords($param);

     return $param;
    }

    $word = "hOlA mUnDo";

    echo mayus($word) . "<br>";

    echo $word;

?>

</body>

</html>