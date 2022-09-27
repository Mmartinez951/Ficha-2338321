<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php

class Usuario
{

    public function eliminar($documento)
    {
        include("conexion.php");

        mysqli_query($db,"DELETE FROM permisos WHERE documento = '$documento'");
        header ("Location: neg_dat_consultar.php");
    }

}

$nuevo= new Usuario();
$nuevo->eliminar($_POST["documento"]);


?>
</body>
</html>