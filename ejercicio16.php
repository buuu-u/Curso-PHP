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
    CONDICIONALES II
</h1>
<form action="funcionejercicio16.php" method="post" name="datosUsuario" id="datosUsuario">
    <table align="center">
        <tr>
            <td><label for="nombreUsuario">Nombre:</label></td>
            <td><input type="text" name="nombreUsuario" id="nombreUsuario"></td>
        </tr>
        <tr>
            <td><label for="contra">Contraseña:</label></td>
            <td><input type="text" name="contra" id="contra"></td>
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
</body>

</html>