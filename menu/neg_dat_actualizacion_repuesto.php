<!DOCTYPE html>
<html>
<head http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pract</title>
</head>
<body>
<?php
include("men.php");
include("ventana modal.php");
include("footer.php");


class repuesto//inicio clase
{
	public function actualizar($repuesto,$descripcion,$cod_repuesto)
{
	include ("conexion.php");
    mysqli_query($db,"UPDATE repuestos SET repuesto='$repuesto'");
	mysqli_query($db,"UPDATE repuestos SET descripcion='$descripcion'");
	mysqli_query($db,"UPDATE repuestos SET cod_repuesto='$cod_repuesto'");

}
}
$nuevo =new repuesto ();
$nuevo->actualizar($_POST["repuesto"],$_POST["descripcion"],$_POST["cod_repuesto"]);

?>
</body>
</html>