<?php

require_once("../modelo/Tareas.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buscar = $_POST["titulo"];

    $resultado = GestionTareas::buscarTarea($buscar);

    echo "
    <h2>Tareas que contienen: $buscar</h2>
    <tr>
    <td>ID</td>
    <td>Titulo</td>
    <td>Descripcion</td>
    <td>Estado</td>
    </tr>";

    foreach ($resultado as $key => $tarea) {
        echo "<tr>
            <td>".$tarea->id."</td>
            <td>".$tarea->titulo."</td>
            <td>".$tarea->descripcion."</td>
            <td>".$tarea->estado."</td>
        </tr>";
    }
}

?>