<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
	<Title>Actualizar permisos</Title>
</head>
<body>
<?php

include("men.php");

class permiso
{

	public function actualizar($documento)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM permisos where documento='$documento'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$documento=stripslashes($row["documento"]);
			$fk_id_rol=stripslashes($row["fk_id_rol"]);
				
               

	
} 

        echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>Permisos</h2>";
		echo "<form  method='POST' class='login-container' action='neg_dat_actualizar_permisos.php' required>";
		echo "<p><input type='text' name='documento'value='$documento' required></p>";
		echo " <p><input type='text' name='fk_id_rol'value='$fk_id_rol'></p>";
        echo " <p><input type='submit' value='Actualizar'></p>";
		echo "</form>";
		echo "</div>";
		
	}


  
}//Termina la clase
$nuevo=new permiso();
$nuevo-> actualizar($_POST["documento"]);



?>
</body>
</html>