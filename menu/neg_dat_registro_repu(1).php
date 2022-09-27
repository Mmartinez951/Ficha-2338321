<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Repuestos</Title>
</head>
<body>
<?php

include("men.php");
include("ventana modal.php");
include("footer.php");
class repuesto
{

	public function registrar($repuesto, $descripcion,$cod_repuesto)
	{
		include ("conexion.php");
		mysqli_query($db, "INSERT INTO repuestos(id_repuesto, repuesto, descripcion,cod_repuesto) VALUES (NULL,'$repuesto','$descripcion','$cod_repuesto')");

		
	}
}
$nuevo=new repuesto();
$nuevo-> registrar($_POST["repuesto"],$_POST["descripcion"],$_POST["cod_repuesto"]);



?>

</body>
</html>