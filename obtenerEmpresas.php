<?php
include "conectar.php";

$sql = "SELECT `id`, `rut`, `nombre_fantasia`, `categoria`, `comuna`, `direccion`,
        `telefono`, `correo`, `titulo_descripcion`, `descripcion`,
         `imagen_logo`,
        `imagen_fondo`, 
        `twitter`, `facebook`, `whatsapp`, `instagram`, `linkedin`
        FROM `empresa`";

$data = array();
$q = mysqli_query($conexion, $sql);

while($row = mysqli_fetch_object($q)){
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($conexion);

?>