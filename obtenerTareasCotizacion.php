<?php
include "conectar.php";

if($_GET['usuario_id']){
$data = array();
$q = mysqli_query($conexion, "SELECT t.id, t.cotizacion, t.descripcion_tarea, t.inicio_tarea, t.termino_tarea, t.contenedor_id, t.usuario_id, 
                                     c.nombre as nombre_categoria, 
                                     p.nomprioridad 
                              FROM `tareas` as t 
                              INNER JOIN categoria_tabla as c ON t.fk_categoria = c.id_categoria 
                              INNER JOIN prioridad as p ON t.fk_prioridad = p.id_prioridad
                              INNER JOIN cotizacion as co ON cotizacion = co.id
                              WHERE t.cotizacion=co.id AND t.usuario_id = ".$_GET['usuario_id']."  ");

// SELECT * FROM  tareas t, cotizacion c
//  WHERE t.cotizacion=c.id AND t.usuario_id = ".$_GET['usuario_id']."  

}
while ($row = mysqli_fetch_object($q)){
       $data[] = $row;

}

echo json_encode($data);
echo mysqli_error($conexion);

?>
