<?php
include "conectar.php";

$post = $_POST;



$titulo_tarea = $post['nombreTarea'];
$prioridad = $post['prioridadTarea'];
$inicio_tarea = $post['inicio_tarea'];
$termino_tarea = $post['termino_tarea'];
$categoria = $post['categoriaTarea'];
$contenedor_id = $post['contenedor_id'];
$usuario_id = $post['usuario_id'];

// INSERT INTO `tareas` ( `titulo_tarea`, `fk_prioridad`, `inicio_tarea`, `termino_tarea`, `fk_categoria`, `contenedor_id`) 
// VALUES ('1', '3', '40001', 'prueba', 'prueba', '2', '2022-12-10', '2022-12-15', '1', '1', '5');

// INSERT INTO tareas (titulo_tarea,fk_prioridad, inicio_tarea,termino_tarea,fk_categoria, contenedor_id)
// VALUES ('".$titulo_tarea."','".$prioridad."', '".$inicio_tarea."','".$termino_tarea."','".$categoria."','".$contenedor_id."' )  ");

 $respuesta = mysqli_query($conexion, "INSERT INTO `tareas` (`usuario_id`, `descripcion_tarea`, `fk_prioridad`, `inicio_tarea`, `termino_tarea`, `fk_categoria`, `contenedor_id`) 
                                         VALUES ('".$usuario_id."','".$titulo_tarea."','".$prioridad."', '".$inicio_tarea."','".$termino_tarea."','".$categoria."','".$contenedor_id."' )  ");

if ($respuesta){
    http_response_code(201);
    $mensaje ['status'] = "Creado Ok";


}else {
    http_response_code(422);
    $mensaje ['status'] = "ERROR";

}

echo json_encode($mensaje);
echo mysqli_error($conexion);

?>
