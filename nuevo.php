<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO</title>
</head>
<body>
    <div class="tabla">
        <form action="sp_insertar.php" method="post">
            <table border='1'>
                <tr>
                    <td>Ingresar Datos:</td>
                </tr>
                <tr>
                    <td>codigo:</td>
                    <td><input type="text" name="codigo" id=""></td>
                </tr>
                <tr>
                    <td>nombre:</td>
                    <td><input type="text" name="nombre" id=""></td>
                </tr>
                <tr>
                    <td>existencia:</td>
                    <td><input type="text" name="existencia" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>