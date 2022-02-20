<?php
    include("conex.php");

    $nombre = $_POST['nombre'];//tomamos a nombre
    $Imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));//tomamos imagen
    
    $query = "INSERT INTO tabla_imagen(nombre,imagen) VALUES('$nombre', '$Imagen')"; //insertamos datos en la bd
    $resultado = $conex->query($query);
    if($resultado){
        header("Location: view.php");
    }

?>