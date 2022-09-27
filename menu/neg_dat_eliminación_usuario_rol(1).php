<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php

class Usuario_rol
{

    public function eliminar($rol_id)
    {
        include("conexion.php");

        mysqli_query($db,"DELETE FROM usuario_rol WHERE rol_id = '$rol_id'");
        header ("Location: neg_dat_consultar_usuario_rol.php");
    }

}

$nuevo= new Usuario_rol();
$nuevo->eliminar($_POST["rol_id"]);


?>
</body>
</html>