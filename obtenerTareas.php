<?php
include "conectar.php";

$data = array();
$q = mysqli_query($conexion, "SELECT * FROM  tareas WHERE contenedor_id = ".$_GET['contenedor']."  ");


while ($row = mysqli_fetch_object($q)){
       $data[] = $row;

}

echo json_encode($data);
echo mysqli_error($conexion);

?>