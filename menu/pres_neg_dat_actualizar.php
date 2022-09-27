<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
	<Title>Actualizar usuario</Title>
</head>
<body>
<?php
include("menuu.php");

class usuario
{

	public function actualizar($documento)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM usuarios where documento='$documento'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$documento=stripslashes($row["documento"]);
		$nombres=stripslashes($row["nombres"]);
		$apellidos=stripslashes($row["apellidos"]);
		$contrasena=stripslashes($row["contrasena"]);
	
}
		

        echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>usuarios</h2>";
		echo "<form name='shdhd'class='login-container' action='neg_dat_actualizacion.php' method='POST' required>";
		echo "Documento actual: $documento <br/>";
		echo "<input name= 'documento' type='hidden' Value='$documento'><br/>";
		echo "nombre:<input name='nombres' type='text' value='$nombres'><br/>";
		echo "apellido:<input name='apellidos' type='text' value='$apellidos'><br/>";
		echo "contrasena:<input name='contrasena' type='passwprd' value='$contrasena'><br/>";
		echo "<input type= 'submit' Value='Actualizar'>";
		echo "</form>";
		echo "</div>";
		echo"</td>";
	}


  
}//Termina la clase
$nuevo=new usuario();
$nuevo-> actualizar($_POST["documento"]);



?>
</body>
</html>