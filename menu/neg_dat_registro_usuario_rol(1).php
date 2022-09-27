<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php
include("men.php");
include("ventana usuario rol.php");
include("footer.php");
class usuario_rol
{

    public function registrar($rol_id)
    {
        include("conexion.php");
        mysqli_query($db,"INSERT INTO usuario_rol(id_rol, rol_id) VALUES(NULL,'$rol_id')");

       

        
    }
}
$nuevo=new usuario_rol();
$nuevo->registrar($_POST["rol_id"]);



?>
</body>

</html>