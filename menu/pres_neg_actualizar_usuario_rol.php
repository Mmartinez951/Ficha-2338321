<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
	<Title>Actualizar usuario rol</Title>
</head>
<body>
<?php



include("men.php");

class usuario_rol
{

	public function actualizar($rol_id)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM usuario_rol where rol_id='$rol_id'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$placa=stripslashes($row["rol_id"]);
			

	
} 

        echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>Repuestos</h2>";
		echo "<form  method='POST' class='login-container' action='neg_dat_actualizar_usuario_rol.php' required>";
		echo "<p><input type='text' name='rol_id'value='$rol_id' required></p>";
        echo " <p><input type='submit' value='Actualizar'></p>";
		echo "</form>";
		echo "</div>";
		
	}


  
}//Termina la clase
$nuevo=new Usuario_rol();
$nuevo-> actualizar($_POST["rol_id"]);



?>
</body>
</html>