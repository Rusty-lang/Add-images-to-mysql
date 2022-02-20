<?php
    include("conex.php");

    $id = $_REQUEST['id'];

    $query = "DELETE FROM tabla_imagen WHERE id='$id'"; //insertamos datos en la bd
    $resultado = $conex->query($query);
    
    if($resultado){
        echo "Modificado";
        header("Location: view.php");   
    }else{
        echo "error";
    }

?>