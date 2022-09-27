<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Practica</Title>
</head>
<body>
<?php


class repuesto
{

	public function eliminar ($repuesto)
	{



		include ("conexion.php");
		mysqli_query($db, "DELETE FROM  repuestos WHERE repuesto='$repuesto'");

		header ("location:neg_dat_consultar_repuesto.php");
	}
}//termina la clase
$nuevo=new repuesto();
$nuevo-> eliminar($_POST["repuesto"]);


?>
</body>
</html>