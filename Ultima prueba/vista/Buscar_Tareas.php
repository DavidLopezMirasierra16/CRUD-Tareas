<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="Tareas.css">
</head>

<body>
    <form action="" method="POST">
        <label for="">Titulo o Descripcion</label>
        <input type="text" name="titulo">

        <input type="submit" value="Buscar">
    </form>
    <table class="tarea-table">
        <?php require_once("../controlador/Buscar_Tareas_Controller.php") ?>
    </table>
    <a href="mostrar_tareas.php">Volver</a>
</body>

</html>