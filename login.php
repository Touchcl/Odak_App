<?php
include "conectar.php";

$json   = file_get_contents('php://input');
$params = json_decode($json);

$cont = $params  -> clave;
$mail = $params  -> correo;
// $nomb = $params  -> nombre;

$sql = "SELECT u.id, u.nombre, u.apellidos, u.correo, u.contrasena,
               e.nombre_fantasia, e.direccion, e.telefono, e.correo as 'correo_empresa', e.imagen_logo, 
               ut.descripcion
        FROM `usuario` as u
        INNER JOIN empresa as e ON u.empresa = e.id
        INNER JOIN usuario_tipo as ut ON u.tipo = ut.id
        where u.correo = '$mail' and u.contrasena = MD5('$cont')";


$data = array();
$q = mysqli_query($conexion, $sql );



while($row = mysqli_fetch_object($q)){
    $data[] = $row;
}
echo json_encode($data);
// echo mysqli_error($conexion);

?>

