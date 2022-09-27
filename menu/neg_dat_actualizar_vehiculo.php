<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php


class vehiculo
{

    public function actualizar($placa ,$marca, $modelo, $tipo_de_vehiculo, $mecanico, $estado, $descripcion, $doc_propietario)
    {

        include("conexion.php");

        mysqli_query($db,"UPDATE vehiculos SET marca='$marca', modelo='$modelo', tipo_de_vehiculo='$tipo_de_vehiculo', mecanico='$mecanico', estado='$estado', descripcion='$descripcion', doc_propietario='$doc_propietario' WHERE placa='$placa'");

        header ("Location: neg_dat_consultar_vehiculo.php");
    }

}


$nuevo= new vehiculo();
$nuevo->actualizar($_POST["placa"],$_POST["marca"],$_POST["modelo"],$_POST["tipo_de_vehiculo"],$_POST["mecanico"],$_POST["estado"],$_POST["descripcion"],$_POST["doc_propietario"]);


?>

</body>
</html>