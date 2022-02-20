<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content-image">
        <a href="index.php" name="btn-add">Agregar una nueva imagen</a>
       
        <?php
        include ("conex.php");
            $query = "SELECT * FROM tabla_imagen";
            $resultado = $conex->query($query);
            while($row = $resultado->fetch_assoc()){

        ?>
      <h1><?php echo $row['id']; ?></h1>
      <h1><?php echo $row['nombre']; ?></h1>
      <img width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="">
        <a href="edit.php?id=<?php echo $row['id']; ?>">Modificar</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
        <?php
            }
        ?>
    </div>
            <style>
                .content-image{
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                }
                .content-image img{
                    margin: 20px;
                }
            </style>
</body>
</html>