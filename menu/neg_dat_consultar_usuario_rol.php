<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>usuario rol</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class usuario_rol
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM usuario_rol";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "rol id"; echo "</td>"; echo";
		</td>"; echo "<td>"; echo "Eliminar"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
        $rol_id=stripcslashes($row["rol_id"]);
	

		echo "<tr class='dir'>";
		echo "<td>";echo $rol_id;
		
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminación_usuario_rol.php'>";
		echo "<input type= 'hidden' class='barra' name = 'rol_id' Value='$rol_id'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_actualizar_usuario_rol.php'>";
		echo "<input type= 'hidden' name = 'rol_id' Value='$rol_id'>";
		echo "<input type= 'submit'class='btn' Value='Actualizar'>";
		echo "</form>";
		echo"</td>";




		echo "</tr>";
}


echo "</table>";
echo "<center>";

  }
  
}//Termina la clase
$nuevo=new usuario_rol();
$nuevo -> consultar();
?>
<a href="pres_registro_usuario_rol.php" class="btn">Nuevo usuario rol</a>
</body>
</html>