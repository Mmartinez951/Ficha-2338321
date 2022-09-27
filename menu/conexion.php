<?php
header("Content-type: text/html;charset=utf-8");
$db= new mysqli('localhost','root','','carfox');
$acentos = $db->query("SET NAMES 'utf8'");
//servidor,usuario,password,DB

if($db->connect_error > 0){
	die('Error de conexion [' . $db->connect_error.']');
}
?>