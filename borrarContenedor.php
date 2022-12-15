<?php
include "conectar.php";

if (isset($_GET['id'])) {
       $respuesta = mysqli_query($conexion, "DELETE FROM contenedores WHERE id = '" . $_GET['id'] . "'  ");


       if ($respuesta) {
              http_response_code(201);
              $mensaje['status'] = "Borrado Ok";
       } else {
              http_response_code(422);
              $mensaje['status'] = "ERROR";
       }
} else {
       $mensaje['status'] = "ERROR id not found";
}
echo json_encode($mensaje);
echo mysqli_error($conexion);
