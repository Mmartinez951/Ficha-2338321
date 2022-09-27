<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>Permisos</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("men.php");



class propietarios
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM propietarios";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "doc_propietario"; echo "</td>"; echo "<td>"; echo"nombres";echo"<td>"; echo"apellidos";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$doc_propietario=stripslashes($row["doc_propietario"]);
		$nombres=stripslashes($row["nombres"]);
        $apellidos=stripslashes($row["apellidos"]);
		

		echo "<tr class='dir'>";
		echo "<td>";echo $doc_propietario; 
		echo "</td>"; echo "<td>";
        echo $nombres; echo "</td>"; 
        echo "</td>"; echo "<td>";
        echo $apellidos; echo "</td>"; 
		echo "</td>";
        
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminar_propietarios.php'>";
		echo "<input type= 'hidden' class='barra' name = 'doc_propietario' Value='$doc_propietario'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizar_propietarios.php'>";
		echo "<input type= 'hidden' name = 'doc_propietario' Value='$doc_propietario'>";
		echo "<input type= 'submit'class='btn' Value='Actualizar'>";
		echo "</form>";
		echo"</td>";




		echo "</tr>";
}


echo "</table>";
echo "<center>";

  }
  
}//Termina la clase
$nuevo=new propietarios();
$nuevo -> consultar();
?>
<a href="pres_registro_propietarios.php" class="btn">Nuevo propietario</a>
</body>
</html>