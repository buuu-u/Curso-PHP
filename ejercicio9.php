<html>
    <head>
        <title>Operator</title>

        <style>
            h1 {
                text-align: center;
            }
            form {
                display: grid;
                place-content: center;
            }
            table {
                border: 2px solid #666666;
                padding: 20px;
                background-color: #FFC;
            }

            .validado{
                text-align: center;
                color: green;
            }

            .no_validado{
                text-align: center;
                color: red;
            }
        </style>
    </head>

    <body>
    <h1>
        DATES USERS
    </h1>
    <form action="operadores.php" method="post" name="datosUsuario" id="datosUsuario">
        <table align="center">
            <tr>
                <td><label for="edadUsuario">Nombre:</label></td>
                <td><input type="text" name="nombreUsuario" id="nombreusuario"></td>
            </tr>
            <tr>
                <td><label for="edadUsuario">Edad:</label></td>
                <td><input type="number" name="edadUsuario" id="edadUsuario"></td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td>
                    <input type="radio" name="sexoUsuario" value="masculino" id="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="sexoUsuario" value="femenino" id="femenino">
                    <label for="femenino">Femenino</label>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type=submit name="enviando" id="enviando" value="Enviar"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST{"enviando"})){

            $nombre = $_POST["nombreUsuario"];
            $edad = $_POST["edadUsuario"];

            if($nombre=="Pedro"){
                echo "<p class='validado'>Puedes entrar $nombre</p>";
            }else{
                echo "<p class='no_validado'>Largate $nombre eres un Pedofilo</p>";
            }
        }
    ?>
    </body>

</html>