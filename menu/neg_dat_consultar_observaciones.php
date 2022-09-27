<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Historial</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class observaciones
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM observaciones";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "placa"; echo "</td>"; echo "<td>"; echo"descripcion_reparacion";echo"<td>"; echo"documento";echo"<td>"; echo"fecha_entrada";echo"fecha_salida";echo"imagenes";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$placa=stripslashes($row["placa"]);
        $descripcion_reparacion=stripslashes($row["descripcion_reparacion"]);
        $documento=stripslashes($row["documento"]);
        $fecha_entrada=stripslashes($row["fecha_entrada"]);
		$fecha_salida=stripslashes($row["fecha_entrada"]);
		$imagenes=stripslashes($row["imagenes"]);

		echo "<tr class='dir'>";
		echo "<td>";echo $placa; 
		echo "</td>"; echo "<td>";
        echo $descripcion_reparacion; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $documento; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $fecha_entrada; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $fecha_salida; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $imagenes; echo "</td>"; 
		echo "</td>";

		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminacion_observaciones.php'>";
		echo "<input type= 'hidden' class='barra' name = 'placa' Value='$placa'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizacion_observaciones.php'>";
		echo "<input type= 'hidden' name = 'placa' Value='$placa'>";
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