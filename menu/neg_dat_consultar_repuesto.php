<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Repuestos</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class repuesto
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM repuestos";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "repuesto"; echo "</td>"; echo "<td>"; echo"descripcion";echo "<td>"; echo "cod_repuesto";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$repuesto=stripslashes($row["repuesto"]);
		$descripcion=stripslashes($row["descripcion"]);
		$cod_repuesto=stripslashes($row["cod_repuesto"]);

		echo "<tr class='dir'>";
		echo "<td>";echo $repuesto; 
		echo "</td>"; echo "<td>";
		 echo $descripcion; echo "</td>"; 
		 echo "<td>"; echo $cod_repuesto;
		  echo "</td>";
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminacion_repuesto.php'>";
		echo "<input type= 'hidden' class='barra' name = 'repuesto' Value='$repuesto'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizacion_repuesto.php'>";
		echo "<input type= 'hidden' name = 'repuesto' Value='$repuesto'>";
		echo "<input type= 'submit'class='btn' Value='Actualizar'>";
		echo "</form>";
		echo"</td>";




		echo "</tr>";
}


echo "</table>";
echo "<center>";
echo "<input type class='btn' Value='Nuevo Repuesto' href='pres_registro_rep.php'>";
  }
  
}//Termina la clase
$nuevo=new repuesto();
$nuevo -> consultar();



?>
</body>
</html>