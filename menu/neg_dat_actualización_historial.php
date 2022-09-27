<!DOCTYPE html>
<html>
<head http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pract</title>
</head>
<body>
<?php
include("men.php");
include("ventana historial.php");
include("footer.php");


class historial//inicio clase
{
	public function actualizar($cod_repuesto,$entrada,$salida,$placa)
{
	include ("conexion.php");
    mysqli_query($db,"UPDATE historial SET cod_repuesto='$cod_repuesto'");
	mysqli_query($db,"UPDATE historial SET entrada='$entrada'");
	mysqli_query($db,"UPDATE historial SET salida='$salida'");
	mysqli_query($db,"UPDATE historial SET placa='$placa'");

}
}
$nuevo =new historial ();
$nuevo->actualizar($_POST["cod_repuesto"],$_POST["entrada"],$_POST["salida"],$_POST["placa"]);

?>
</body>
</html>