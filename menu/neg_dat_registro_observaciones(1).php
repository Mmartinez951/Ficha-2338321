<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Repuestos</Title>
</head>
<body>
<?php

include("men.php");
include("ventana modal observaciones.php");
include("footer.php");
class observaciones 
{

	public function registrar($placa, $descripcion_reparacion,$documento,$fecha_entrada,$fecha_salida,$imagenes)
	{
		include ("conexion.php");
		mysqli_query($db, "INSERT INTO observaciones(id_observaciones,placa, descripcion_reparacion,documento,fecha_entrada,fecha_salida,imagenes) VALUES (NULL,'$placa', '$descripcion_reparacion','$documento','$fecha_entrada','$fecha_salida','$imagenes')");

		
	}
}
$nuevo=new observaciones();
$nuevo-> registrar($_POST["placa"],$_POST["descripcion_reparacion"],$_POST["documento"],$_POST["fecha_entrada"],$_POST["fecha_salida"],$_POST["imagenes"]);



?>

</body>
</html>