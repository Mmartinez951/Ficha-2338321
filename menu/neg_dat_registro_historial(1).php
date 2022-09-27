<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>historial</Title>
</head>
<body>
<?php

include("men.php");
include("ventana historial.php");
include("footer.php");
class Historial
{

	public function registrar($cod_repuesto, $entrada,$salida,$placa)
	{
		include ("conexion.php");
		mysqli_query($db, "INSERT INTO historial(id_historial, cod_repuesto, entrada,salida,placa) VALUES (NULL,'$cod_repuesto','$entrada','$salida','$placa')");

		
	}
}
$nuevo=new Historial();
$nuevo-> registrar($_POST["cod_repuesto"],$_POST["entrada"],$_POST["salida"],$_POST["placa"]);



?>

</body>
</html>