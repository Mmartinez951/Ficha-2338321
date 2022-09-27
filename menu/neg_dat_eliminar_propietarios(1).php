<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Propietarios</Title>
</head>
<body>
<?php



class propietarios
{

	public function eliminar ($doc_propietario)
	{



		include ("conexion.php");
		mysqli_query($db, "DELETE FROM propietarios WHERE doc_propietario='$doc_propietario'");

		header ("location:neg_dat_consultar_propietarios.php");
	}
}//termina la clase
$nuevo=new Propietarios();
$nuevo-> eliminar($_POST["doc_propietario"]);


?>
</body>
</html>