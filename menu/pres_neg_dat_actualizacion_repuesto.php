<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
	<Title>Practica</Title>
</head>
<body>
<?php

include("men.php");

class repuesto
{

	public function actualizar($repuesto)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM repuestos where repuesto='$repuesto'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$repuesto=stripslashes($row["repuesto"]);
			$descripcion=stripslashes($row["descripcion"]);
				$cod_repuesto=stripslashes($row["cod_repuesto"]);

	
} 

        echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>Repuestos</h2>";
		echo "<form  method='POST' class='login-container' action='neg_dat_actualizacion_repuesto.php' required>";
		echo "<p><input type='text' name='repuesto'value='$repuesto' required></p>";
		echo " <p><input type='text' name='descripcion'value='$descripcion' required></p>";
		echo " <p><input type='text' name='cod_repuesto' value='$cod_repuesto' required></p>";
        echo " <p><input type='submit' value='Actualizar'></p>";
		echo "</form>";
		echo "</div>";
		
	}


  
}//Termina la clase
$nuevo=new repuesto();
$nuevo-> actualizar($_POST["repuesto"]);



?>
</body>
</html>