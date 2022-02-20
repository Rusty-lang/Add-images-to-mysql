<?php
    include("conex.php");

    $nombre = $_POST['nombre'];//tomamos a nombre
    $Imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));//tomamos imagen
    $id = $_REQUEST['id'];

    $query = "UPDATE tabla_imagen SET nombre='$nombre', imagen='$Imagen' WHERE id='$id'"; //insertamos datos en la bd
    $resultado = $conex->query($query);
    if($resultado){
        echo "Modificado";
        header("Location: view.php");   
    }else{
        echo "error";
    }

?>