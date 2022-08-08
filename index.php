<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercancia</title>
</head>
<body >
    <div class="home">
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div class="tabla" >
        <table border='1' class="tbl"> 
            <tr>
                <td>id</td>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Existencia</td>
                <td>Opciones</td>
            </tr>
            <?php
                $cnx = mysqli_connect("sql200.epizy.com", "epiz_30541427", "iiYMLZlWwk49", "epiz_30541427_mercancia");
                $sql= "SELECT id,codigo, nombre, existencia FROM producto order by id asc";
                $rta= mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?> &
                        codigo=<?php echo $mostrar['1'] ?> &
                        nombre=<?php echo $mostrar['2'] ?> &
                        existencia=<?php echo $mostrar['3'] ?>
                        ">Editar</a>
                        <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>