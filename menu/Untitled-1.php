<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
<link rel="stylesheet" href="Estilotablarepu.css">
</head>
<body>

<?php
include("menuu.php");
class Usuario
{

    public function consultar()
    {
        include("conexion.php");
        echo "<table border='2' align='center'>";
        $sql = "SELECT * FROM usuarios";
        if(!$result = $db ->query($sql))
{
            die('Hay un error en la consulta  [' . $db->error .']');
            echo "<tr>";
		echo "<td>";echo "repuesto"; echo "</td>"; echo "<td>"; echo"descripcion";echo "<td>"; echo "cod_repuesto";echo";

		</td>"; echo "<td>"; echo "accion"; echo "</td>"; echo "<td>"; echo "Actualizar" ; echo "</td>";
		echo "</tr>";
        }

        while($row = $result->fetch_assoc()){
            $documento=stripcslashes($row["documento"]);
            $nombres=stripcslashes($row["nombres"]);
            $apellidos=stripcslashes($row["apellidos"]);
            $contrasena=stripcslashes($row["contrasena"]);
        

        echo "<tr class='dir'>";

        echo "<td>";
        echo $documento; 
        echo $nombres; 
        echo $apellidos; 
        echo $contrasena; 
        echo "</td>";



        echo "<td>";
        echo "<form name='sd' method='POST' action='neg_dat_eliminar.php'>";
        echo "<input type='hidden' name='documento' value='$documento'>";
        echo "<input type='submit' class='btn' value='Eliminar' >";
        echo "</form>";
        echo "</td>";


        echo "<td>";
        echo "<form name='sd' method='POST' action='pres_actualizar.php'>";
        echo "<input type='hidden' name='documento' value='$documento'>";
        echo "<input type='submit' class='btn' value='Actualizar' >";
        echo "</form>";
        echo "</td>";

        echo "</tr>";

        }

    }
  
}
echo "</table>";
echo "<center>";
$nuevo=new Usuario();
$nuevo->consultar();


?>
</body>
</html>