<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM prod";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Inventario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="des" placeholder="Descripcion">
            <input type="text" name="precio" placeholder="Precio">
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Registro de Productos</h2>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['des'] ?></th>
                        <th><?= $row['precio'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>