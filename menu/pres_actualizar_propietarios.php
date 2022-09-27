<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Estilo3.css">
    <Title>Actualizar propietarios</Title>
</head>
<body>
<?php



include("men.php");

class propietarios
{

	public function actualizar($doc_propietario)
	{
	include ("conexion.php");


	$sql = "SELECT * FROM propietarios where doc_propietario='$doc_propietario'";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


	while ($row=$result->fetch_assoc()) {
		$doc_propietario=stripslashes($row["doc_propietario"]);
			

	
} 

        echo "<div class='login'>";	
        echo "<div class='login-triangle'></div>";
		echo "<h2 class='login-header'>Propietarios</h2>";
		echo "<form  method='POST' class='login-container' action='neg_dat_actualizar_propietarios.php' required>";
		echo "<p><input type='number' name='doc_propietario'value='$doc_propietario' required></p>";
        echo "<p><input type='text' name='nombres'value='$nombres' required></p>";
        echo "<p><input type='text' name='apellidos'value='$apellidos' required></p>";
        echo " <p><input type='submit' value='Actualizar'></p>";
		echo "</form>";
		echo "</div>";
		
	}


  
}//Termina la clase
$nuevo=new propietarios();
$nuevo-> actualizar($_POST["doc_propietario"]);



?>
</body>
</html>