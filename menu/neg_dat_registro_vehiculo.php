<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Vehiculo</Title>
</head>
<body>
<?php

include("men.php");
include("ventana vehiculo.php");
include("footer.php");
class vehiculo
{

	public function registrar($placa, $marca,$modelo,$tipo_de_vehiculo,$mecanico,$estado,$descripcion,$doc_propietario)
	{
		include ("conexion.php");
		mysqli_query($db, "INSERT INTO vehiculos(id_vehiculo, placa, marca,modelo,tipo_de_vehiculo,mecanico,estado,descripcion,doc_propietario) VALUES (NULL,'$placa','$marca','$modelo','$tipo_de_vehiculo','$mecanico','$estado','$descripcion','$doc_propietario')");

		
	}
}
$nuevo=new vehiculo();
$nuevo-> registrar($_POST["placa"],$_POST["marca"],$_POST["modelo"],$_POST["tipo_de_vehiculo"],$_POST["mecanico"],$_POST["estado"],$_POST["descripcion"],$_POST["doc_propietario"]);





?>

</body>
</html>