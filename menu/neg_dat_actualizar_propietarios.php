<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php

class propietario
{

    public function actualizar($doc_propietario,$nombres,$apellidos)
    {
        include("conexion.php");

        mysqli_query($db,"UPDATE propietarios SET doc_propietario='$doc_propietario'");
        mysqli_query($db,"UPDATE propietarios SET nombres='$nombres'");
        mysqli_query($db,"UPDATE propietarios SET apellidos='$apellidos'");
        header ("Location: neg_dat_consultar_propietarios.php");
    }

}

$nuevo= new propietario();
$nuevo->actualizar($_POST["doc_propietario"],$_POST["nombres"],$_POST["apellidos"]);


?>
</body>
</html>