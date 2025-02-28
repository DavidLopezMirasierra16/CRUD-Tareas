<?php

require_once("../modelo/Tareas.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["titulo"])) {
        //$titulo = $_POST["titulo"];
        $titulo_limpio = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
        $descripcion = $_POST["descripcion"];
        $estado = $_POST["estados"];

        //Comprobamos que titulo sea mayor a 3 caracteres
        if (strlen($titulo_limpio) < 3) {
            echo "<div>Titulo no valido, tiene que ser mayo a 3 caracteres</div>";
        } else {
            $resultado = GestionTareas::insertarEnBD($titulo_limpio, $descripcion, $estado);

            if ($resultado == null) {
                echo "<div>Tarea agregada con éxito</div>";
            }
        }
    } else {
        echo "<div>Titulo vacio</div>";
    }
}
