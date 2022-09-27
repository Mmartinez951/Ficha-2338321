<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
	<Title>Practica</Title>
</head>
<body>
<?php

include("men.php");

class historial
{

	public function actualizar($cod_repuesto)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM historial where cod_repuesto='$cod_repuesto'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$cod_repuesto=stripslashes($row["cod_repuesto"]);
		$entrada=stripslashes($row["entrada"]);
		$salida=stripslashes($row["salida"]);
		$placa=stripslashes($row["placa"]);

	
} 

    echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>Historial</h2>";
		echo "<form  method='POST' class='login-container' action='neg_dat_actualización_historial.php' required>";
		echo "<p><input type='text' name='cod_repuesto'value='$cod_repuesto' required></p>";
		echo " <p><input type='text' name='entrada'value='$entrada' required></p>";
		echo " <p><input type='text' name='salida' value='$salida' required></p>";
		echo " <p><input type='text' name='placa' value='$placa' required></p>";
        echo " <p><input type='submit' value='Actualizar'></p>";
		echo "</form>";
	echo "</div>";
		
	}


  
}//Termina la clase
$nuevo=new historial();
$nuevo-> actualizar($_POST["cod_repuesto"]);



?>
</body>
</html>