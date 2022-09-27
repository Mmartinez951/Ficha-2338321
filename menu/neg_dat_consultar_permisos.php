<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Permisos</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class permisos
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM permisos";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "documento"; echo "</td>"; echo "<td>"; echo"fk_id_rol";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$documento=stripslashes($row["documento"]);
		$fk_id_rol=stripslashes($row["fk_id_rol"]);
		

		echo "<tr class='dir'>";
		echo "<td>";echo $documento; 
		echo "</td>"; echo "<td>";
        echo $fk_id_rol; echo "</td>"; 
		  echo "</td>";
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminacion_permisos.php'>";
		echo "<input type= 'hidden' class='barra' name = 'documento' Value='$documento'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizacion_permisos.php'>";
		echo "<input type= 'hidden' name = 'documento' Value='$documento'>";
		echo "<input type= 'submit'class='btn' Value='Actualizar'>";
		echo "</form>";
		echo"</td>";




		echo "</tr>";
}


echo "</table>";
echo "<center>";

  }
  
}//Termina la clase
$nuevo=new permisos();
$nuevo -> consultar();
?>
<a href="pres_registro_permisos.php" class="btn">Nuevo repuesto</a>
</body>
</html>