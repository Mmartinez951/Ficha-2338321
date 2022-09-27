<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carfox</title>
</head>
<body>
<?php
class Permisos
{
    public function validar($documento, $contrasena)   
{
include ("conexion.php");

$sql = "SELECT * FROM usuarios WHERE documento='$documento' AND contrasena='$contrasena'";
if(!$result = $db->query($sql)){
    die('hay un error primera consulta!!! ['. $db->error.']');

}
$cont="0";
while($row = $result-> fetch_assoc())
{
    $cont=$cont+1;
}
echo $cont;
if ($cont=="0")
{
    echo"usuario incorrecto";
     header("location:inicia_sesión.html");
     }

     if ($cont=="1")
     {
         echo"usuario correcto";
         $_SESSION['logueado']="1";
         $_SESSION['usuario_actual']=$documento;
     
         header("location:contenedor.php");
          }




   }
 }
 $nuevo=new Permisos();
 $nuevo->validar($_POST["documento"],$_POST["contrasena"]);
?>
</body>
</html>