<?php

require_once("../modelo/Tareas.php");

$id_editar = $_GET["id"];

$datos = GestionTareas::obtenerTodosDatosDeUnaTarea($id_editar);

foreach ($datos as $key => $producto) {
    echo "<form method='POST' action=''>" .
        "<input type='text' value='$producto->id' name='id' hidden></input>" .
        "<label>Titulo</label>" .
        "<input type='text' value='$producto->titulo' name='titulo'></input>" .
        "<label>Descripcion</label>" .
        "<input type='text' value='$producto->descripcion' name='descripcion'></input>" .
        "<label>Estado</label>" .
        "<select value='' name='estado'>
            <option value='Pendiente'>Pendiente</option>
            <option value='En Progreso'>En Progreso</option>
            <option value='Completada'>Completa</option>
        </select>" .
        "<input type='submit' id='editar' name='editar' value='Confirmar Cambios'></input>" .
        "<a href='mostrar_tareas.php'>Volver a las tareas</a>".
        "</from>";
}
