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
<form action="funcionejercicio15.php" method="post" name="datosUsuario" id="datosUsuario">
    <table align="center">
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombreUsuario" id="usuario"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><input type="number" name="edadUsuario" id="edadUsuario"></td>
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