<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Practica</Title>
</head>
<body>
<?php



class vehiculo
{

	public function eliminar ($placa)
	{



		include ("conexion.php");
		mysqli_query($db, "DELETE FROM vehiculos WHERE placa='$placa'");

		header ("location:neg_dat_consultar_vehiculo.php");
	}
}//termina la clase
$nuevo=new vehiculo();
$nuevo-> eliminar($_POST["placa"]);


?>
</body>
</html>


?>
</body>
</html>