<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" required placeholder="Nombre de imágen"><br><br>
            <input type="file" name="imagen" required><br><br>
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