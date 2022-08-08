<?php

    $id= $_POST['id'];
    $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    $existencia= $_POST['existencia'];

    $cnx = mysqli_connect("sql200.epizy.com", "epiz_30541427", "iiYMLZlWwk49", "epiz_30541427_mercancia");
    $sql= "UPDATE producto set codigo='$codigo', nombre='$nombre', existencia='$existencia' where id like $id";
    $rta= mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Actualizo!";
    }
    else {
        header("Location: index.php");
    }

?>