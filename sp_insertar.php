<?php

    $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    $existencia= $_POST['existencia'];

    $cnx = mysqli_connect("sql200.epizy.com", "epiz_30541427", "iiYMLZlWwk49", "epiz_30541427_mercancia");
    $sql= "INSERT INTO producto(codigo, nombre, existencia) VALUES('$codigo','$nombre','$existencia')";
    $rta= mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se inserto!";
    }
    else {
        header("Location: index.php");
    }

?>