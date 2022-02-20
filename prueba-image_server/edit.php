<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        include ("conex.php");
        
            $id= $_REQUEST['id'];

            $query = "SELECT * FROM tabla_imagen WHERE id='$id'";
            $resultado = $conex->query($query);
            $row = $resultado->fetch_assoc();

        ?>
    <div class="container">
        <form action="process_edit.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre de imágen"
            value="<?php echo $row['nombre'];?>"><br><br>
            <img width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="">

            <input type="file" name="imagen"><br><br>
            <input type="submit" value="Aceptar">
        </form>
    </div>




    <style>
        .container{
            display: flex;
            margin: 100px auto;
            justify-content: center;
        }
    </style>
</body>
</html>