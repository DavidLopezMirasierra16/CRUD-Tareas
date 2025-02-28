<?php

require_once("Config.php");

class GestionTareas{

    /**
     * Función que nos inserta en la BD la tarea que nosotros le pasamos.
     */
    public static function insertarEnBD($titulo, $descripcion, $estado, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("INSERT INTO tareas (`titulo`, `descripcion`, `estado`) VALUES (:titulo, :descripcion, :estado)");
        
        //$titulo = htmlspecialchars($titulo);
        
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':estado', $estado);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * Funcion que nos devuelve todos los datos.
     */
    public static function obtenerTodosDatos($type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("SELECT * FROM tareas");
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * Funcion que te obtiene todos los datos de una tarea.
     */
    public static function obtenerTodosDatosDeUnaTarea($id, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("SELECT * FROM tareas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * Funcion que elimina una tarea.
     */
    public static function eliminarTarea($id, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("DELETE FROM tareas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * Funcion que nos edita los datos de un producto.
     */
    public static function editarTarea($id, $titulo, $descripcion, $estado, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("UPDATE gestion_tareas.tareas SET titulo = :titulo, descripcion = :descripcion, estado = :estado WHERE id = :id");
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * Funcion que nos busca si un titulo o descripcion tiene lo que nosotros le pasamos.
     */
    public static function buscarTarea($titulo, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("SELECT * FROM tareas WHERE titulo LIKE :titulo OR descripcion LIKE :titulo");

        $titulo = "%".$titulo."%";
        $stmt->bindParam(':titulo', $titulo);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

}

?>