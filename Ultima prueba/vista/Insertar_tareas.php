<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Tareas</title>
    <link rel="stylesheet" href="Tareas.css">
</head>
<body>
    <?php require_once("../controlador/Insertar_Tareas_Controller.php") ?>
    <form action="" method="POST">
        <label for="">Titulo</label>
        <input type="text" id="titulo" name="titulo">

        <label for="">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion">

        <select name="estados" id="estados">
            <option value="Pendiente">Pendiente</option>
            <option value="En Progreso">En Progreso</option>
            <option value="Completada">Completa</option>
        </select>

        <input type="submit" id="enviar" name="enviar" value="Enviar">
    </form>
    <a href="mostrar_tareas.php">Consulta todas las tareas</a>
</body>
</html>