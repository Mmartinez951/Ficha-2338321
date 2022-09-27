<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>


<?php

class usuario_rol
{

    public function actualizar($id_rol,$rol_id)
    {
        include("conexion.php");

        mysqli_query($db,"UPDATE usuario_rol SET rol_id='$rol_id' WHERE id_rol=$id_rol");
        header ("Location: neg_dat_consultar_usuario_rol.php");
    }

}

$nuevo= new usuario_rol();
$nuevo->actualizar($_POST["id_rol"],$_POST["rol_id"]);


?>
</body>
</html>