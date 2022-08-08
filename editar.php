<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $codigo = $_GET['codigo'];
        $nombre = $_GET['nombre'];
        $existencia = $_GET['existencia'];

    ?>

    <div class="tabla">
        <form action="sp_editar.php" method="post">
            <table border='1'>
                <tr>
                    <td>Ingresar Datos:</td>
                    <td><input type="text" name="id" id="" style="visibility:hidden" value="<?= $id?>"></td>
                </tr>
                <tr>
                    <td>codigo:</td>
                    <td><input type="text" name="codigo" id="" value="<?= $codigo?>"></td>
                </tr>
                <tr>
                    <td>nombre:</td>
                    <td><input type="text" name="nombre" id="" value="<?= $nombre?>"></td>
                </tr>
                <tr>
                    <td>existencia</td>
                    <td><input type="text" name="existencia" id="" value="<?= $existencia?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td> <a href="index.php"> Cancelar</a> </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>