<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Practica</Title>
</head>
<body>
<?php


class Historial
{

	public function eliminar ($cod_repuesto)
	{



		include ("conexion.php");
		mysqli_query($db, "DELETE FROM  historial WHERE cod_repuesto='$cod_repuesto'");

		header ("location:neg_dat_consultar_historial.php");
	}
}//termina la clase
$nuevo=new Historial();
$nuevo-> eliminar($_POST["cod_repuesto"]);


?>
</body>
</html>