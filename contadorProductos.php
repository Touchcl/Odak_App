<?php
include "conectar.php";

$data = array();
$q = mysqli_query($conexion, "SELECT count(*) FROM `productos`"); 

while($row = mysqli_fetch_object($q)){
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($conexion);

?>