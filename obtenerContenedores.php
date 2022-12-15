<?php
include "conectar.php";

$usuario_id = $_GET['usuario_id'];
if (isset($usuario_id)) {
       $data = array();
       // $q = mysqli_query($conexion, "SELECT * FROM  tareas WHERE usuario_id = " . $usuario_id);
       $q = mysqli_query($conexion, "SELECT *
                                     FROM tareas t, contenedores
                                     WHERE contenedores.usuario_id= " . $usuario_id);


       while ($row = mysqli_fetch_object($q)) {
              $data[] = $row;
       }
       echo json_encode($data);
       echo mysqli_error($conexion);
} else {

       http_response_code(422);
       $mensaje['status'] = "ERROR";
       echo json_encode($mensaje);
}
