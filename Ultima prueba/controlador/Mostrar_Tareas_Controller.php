<?php

require_once("../modelo/Tareas.php");

echo "
<h2>Todas las tareas</h2>
<tr>
<td>ID</td>
<td>Titulo</td>
<td>Descripcion</td>
<td>Estado</td>
</tr>";

foreach (GestionTareas::obtenerTodosDatos() as $key => $tarea) {
    echo "<tr>
            <td>".$tarea->id."</td>
            <td>".$tarea->titulo."</td>
            <td>".$tarea->descripcion."</td>
            <td>".$tarea->estado."</td>
            <td><a href='Eliminar_Tarea.php?id=".$tarea->id."'>Eliminar</a></td>
            <td><a href='Editar_Tarea.php?id=".$tarea->id."'>Editar</a></td>
        </tr>";
}

?>