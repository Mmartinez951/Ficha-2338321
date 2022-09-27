<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Historial</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class historial
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM historial";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "cod_repuesto"; echo "</td>"; echo "<td>"; echo"entrada";echo"<td>"; echo"salida";echo"<td>"; echo"placa";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$cod_repuesto=stripslashes($row["cod_repuesto"]);
        $entrada=stripslashes($row["entrada"]);
        $salida=stripslashes($row["salida"]);
        $placa=stripslashes($row["placa"]);
		

		echo "<tr class='dir'>";
		echo "<td>";echo $cod_repuesto; 
		echo "</td>"; echo "<td>";
        echo $entrada; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $salida; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $placa; echo "</td>"; 
		echo "</td>";
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminacion_historial.php'>";
		echo "<input type= 'hidden' class='barra' name = 'cod_repuesto' Value='$cod_repuesto'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizacion_historial.php'>";
		echo "<input type= 'hidden' name = 'cod_repuesto' Value='$cod_repuesto'>";
		echo "<input type= 'submit'class='btn' Value='Actualizar'>";
		echo "</form>";
		echo"</td>";




		echo "</tr>";
}


echo "</table>";
echo "<center>";

  }
  
}//Termina la clase
$nuevo=new historial();
$nuevo -> consultar();
?>
<a href="pres_registro_historial.php" class="btn">Nuevo repuesto</a>
</body>
</html>