<?php

require_once("../modelo/Tareas.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["titulo"])) {
        $id = $_POST["id"];
        //$titulo = $_POST["titulo"];
        $titulo_limpio = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
        $descripcion = $_POST["descripcion"];
        $estado = $_POST["estados"];

        if (strlen($titulo_limpio) < 3) {
            echo "<div>Titulo no válido, tiene que ser mayo a 3 caracteres</div>";
        } else {
            $resultado = GestionTareas::editarTarea($id, $titulo_limpio, $descripcion, $estado);

            if ($resultado == null) {
                echo "<div>Tarea editada con éxito</div>";
                header("Location: mostrar_tareas.php");
            }
        }
    } else {
        echo "<div>Titulo vacio</div>";
    }
}
