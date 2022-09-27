<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php
include("menuu.php");
include("ventana permisos.php");
include("footer.php");
class Usuario
{

    public function registrar($documento, $fk_id_rol)
    {
        include("conexion.php");
        mysqli_query($db,"INSERT INTO permisos(id_permiso, documento, fk_id_rol) VALUES(NULL,'$documento','$fk_id_rol')");

      

        
    }
}
$nuevo=new Usuario();
$nuevo->registrar($_POST["documento"], $_POST["fk_id_rol"]);



?>
</body>

</html>