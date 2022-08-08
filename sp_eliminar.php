<?php

    $id= $_GET['id'];

    $cnx = mysqli_connect("sql200.epizy.com", "epiz_30541427", "iiYMLZlWwk49", "epiz_30541427_mercancia");
    $sql= "DELETE FROM producto where id like $id";
    $rta= mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Elimino!";
    }
    else {
        header("Location: index.php");
    }

?>