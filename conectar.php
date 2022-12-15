<?php

// header('Access-Control-Allow-Origin:*');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
// header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
// header("Allow: GET, POTS, OPTIONS, PUT, DELETE");
// header('Acces-Control-Allow-Headers: token, Content-Type');
// header('Acces-Control-Max-Age: 1728000');
// header('Content-Length: 0');
// header('Content-Type: applicatio/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS"){
    die();
}
$conexion = mysqli_connect("localhost","root","","odak") or die ("could not connect to DB")

?>