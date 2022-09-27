<!DOCTYPE html>
<html>
<head http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Actualizar</title>
</head>
<body>
<?php
include("menuu.php");
include("ventana usuario.php");
include("footer.php");


class usuario//inicio clase
{
	public function actualizar($documento,$nombres,$apellidos,$contrasena)
{
	include ("conexion.php");
    mysqli_query($db,"UPDATE usuarios SET documento='$documento'");
	mysqli_query($db,"UPDATE usuarios SET nombres='$nombres'");
	mysqli_query($db,"UPDATE usuarios SET apellidos='$apellidos'");
    mysqli_query($db,"UPDATE usuarios SET contrasena='$contrasena'");

}
}
$nuevo =new usuario ();
$nuevo->actualizar($_POST["documento"],$_POST["nombres"],$_POST["apellidos"],$_POST["contrasena"]);

?>
</body>
</html>