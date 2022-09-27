<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
	<Title>Actualizar vehiculo</Title>
</head>
<body>
<?php

include("men.php");

class vehiculo
{

	public function actualizar($placa)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM vehiculos where placa='$placa'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$placa=stripslashes($row["placa"]);
			$marca=stripslashes($row["marca"]);
				$modelo=stripslashes($row["modelo"]);
                $tipo_de_vehiculo=stripslashes($row["tipo_de_vehiculo"]);
                $mecanico=stripslashes($row["mecanico"]);
                $estado=stripslashes($row["estado"]);
                $descripcion=stripslashes($row["descripcion"]);
                $doc_propietario=stripslashes($row["doc_propietario"]);

	
} 

        echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>Repuestos</h2>";
		echo "<form  method='POST' class='login-container' action='neg_dat_actualizar_vehiculo.php' required>";
		echo "<p><input type='text' name='placa'value='$placa' required></p>";
		echo " <p><input type='text' name='marca'value='$marca' required></p>";
		echo " <p><input type='text' name='modelo' value='$modelo' required></p>";
        echo " <p><input type='text' name='tipo_de_vehiculo' value='$tipo_de_vehiculo' required></p>";
        echo " <p><input type='text' name='mecanico' value='$mecanico' required></p>";
        echo " <p><input type='text' name='estado' value='$estado' required></p>";
        echo " <p><input type='text' name='descripcion' value='$descripcion' required></p>";
        echo " <p><input type='text' name='doc_propietario' value='$doc_propietario' required></p>";
        echo " <p><input type='submit' value='Actualizar'></p>";
		echo "</form>";
		echo "</div>";
		
	}


  
}//Termina la clase
$nuevo=new vehiculo();
$nuevo-> actualizar($_POST["placa"]);



?>
</body>
</html>