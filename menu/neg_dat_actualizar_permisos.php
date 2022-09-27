<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php

class permisos
{

    public function actualizar($documento,$fk_id_rol)
    {
        include("conexion.php");

        mysqli_query($db,"UPDATE permisos SET fk_id_rol='$fk_id_rol' WHERE documento=$documento");
        header ("Location: neg_dat_consultar_permisos.php");
    }

}

$nuevo= new permisos();
$nuevo->actualizar($_POST["documento"],$_POST["fk_id_rol"]);


?>
</body>
</html>