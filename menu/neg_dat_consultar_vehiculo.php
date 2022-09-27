<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Repuestos</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class vehiculo
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM vehiculos";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "placa"; echo "</td>"; echo "<td>"; echo"marca";echo "<td>"; echo "modelo";echo"<td>"; echo"tipo_de_vehiculo";echo"<td>"; echo "mecanico";echo"<td>"; echo "estado";echo"<td>"; echo "descripcion";echo"<td>"; echo "doc_propietario";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$placa=stripslashes($row["placa"]);
		$marca=stripslashes($row["marca"]);
		$modelo=stripslashes($row["modelo"]);
        $tipo_de_vehiculo=stripslashes($row["tipo_de_vehiculo"]);
        $mecanico=stripslashes($row["mecanico"]);
        $estado=stripslashes($row["estado"]);
        $descripcion=stripslashes($row["descripcion"]);
        $doc_propietario=stripslashes($row["doc_propietario"]);

		echo "<tr class='dir'>";
		echo "<td>";echo $placa; 
		echo "</td>"; echo "<td>";
		 echo $marca; echo "</td>"; 
		 echo "<td>"; echo $modelo;
         echo "<td>"; echo $tipo_de_vehiculo;
         echo "<td>"; echo $mecanico;
         echo "<td>"; echo $estado;
         echo "<td>"; echo $descripcion;
         echo "<td>"; echo $doc_propietario;
		  echo "</td>";
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminacion_vehiculo.php'>";
		echo "<input type= 'hidden' class='barra' name = 'placa' Value='$placa'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizació_vehiculo.php'>";
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
$nuevo=new vehiculo();
$nuevo -> consultar();
?>
<a href="pres_registro_vehiculo.php" class="btn">Nuevo vehiculo</a>
</body>
</html>