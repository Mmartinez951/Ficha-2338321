<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<Title>usuarios</Title>
</head>
     <link rel="stylesheet" href="Estilotablarepu.css">

<body>
	

<?php
include ("menuu.php");



class usuario
{

	public function consultar ()
	{
	include ("conexion.php");

	echo "<table border='2' align='center'>";

	$sql = "SELECT * FROM usuarios";
	if(!$result = $db->query($sql)){
		die('Hay un error primera consulta!!! ['.$db->error.']');
		}


		echo "<tr>";
		echo "<td>";echo "Documento"; echo "</td>"; echo "<td>"; echo"Nombres";echo "<td>"; echo "Apellidos";echo"<td>"; echo "Contraseña";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";

	while ($row=$result->fetch_assoc()) {
		$documento=stripslashes($row["documento"]);
		$nombres=stripslashes($row["nombres"]);
		$apellidos=stripslashes($row["apellidos"]);
		$contrasena=stripslashes($row["contrasena"]);

		echo "<tr class='dir'>";
		echo "<td>";echo $documento; 
		echo "</td>"; echo "<td>";
		 echo $nombres; echo "</td>"; 
		 echo "<td>"; echo $apellidos;
		 echo "</td>"; echo "<td>";
		 echo $contrasena; echo "</td>"; 
		  echo "</td>";
		
		echo "<td>";
		echo "<form name='shdhd' method='POST' action='neg_dat_eliminacion.php'>";
		echo "<input type= 'hidden' class='barra' name = 'documento' Value='$documento'>";
		echo "<input type= 'submit' class='btn'  Value='eliminar'>";
		echo "</form>";
		echo"</td>";

		echo "<td>";
		echo "<form name='shdhd' method='POST' action='pres_neg_dat_actualizar.php'>";
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
$nuevo=new usuario();
$nuevo -> consultar();



?>
<a href="pres_registro.php" class="btn">Nuevo usuario</a>
</body>
</html>