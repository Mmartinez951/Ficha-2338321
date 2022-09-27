<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Repuestos</Title>
</head>
<body>
<?php

include("menuu.php");
include("ventana usuario.php");
include("footer.php");
class usuario
{

	public function registrar($documento, $nombres,$apellidos,$contrasena)
	{
		include ("conexion.php");
		mysqli_query($db, "INSERT INTO usuarios(id_usuario, documento, nombres,apellidos,contrasena) VALUES (NULL,'$documento','$nombres','$apellidos','$contrasena')");

		
	}
}
$nuevo=new usuario();
$nuevo-> registrar($_POST["documento"],$_POST["nombres"],$_POST["apellidos"],$_POST['contrasena']);



?>

</body>
</html>