<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Tareas</title>
    <link rel="stylesheet" href="Tareas.css">
</head>
<body>
    <table class="tarea-table">
        <?php require_once("../controlador/Mostrar_Tareas_Controller.php") ?>
    </table>
    <a href="Insertar_tareas.php">Volver al formulario de tareas</a>
    <a href="Buscar_Tareas.php">Buscar una tarea</a>
</body>
</html>