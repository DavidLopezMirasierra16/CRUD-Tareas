<?php

    require_once("../modelo/Tareas.php");

    //$id_eliminar = $_GET["id"];
    $id_eliminar = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if($id_eliminar==false){
        echo "<div>Numero no valido</div>";
    }else{
        GestionTareas::eliminarTarea($id_eliminar);
    
        header("Location: mostrar_tareas.php");
    }

?>