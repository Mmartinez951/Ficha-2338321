<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Practica</Title>
</head>
<body>
<?php



class usuario
{

	public function eliminar ($documento)
	{



		include ("conexion.php");
		mysqli_query($db, "DELETE FROM  usuarios WHERE documento='$documento'");

		header ("location:neg_dat_consultar.php");
	}
}//termina la clase
$nuevo=new usuario();
$nuevo-> eliminar($_POST["documento"]);


?>
</body>
</html>