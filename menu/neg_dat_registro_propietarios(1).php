<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Carfox</title>
</head>
<body>

<?php
include("menuu.php");
include("ventana propietarios.php");
include("footer.php");
class propietarios
{

    public function registrar($doc_propietario, $nombres,$apellidos)
    {
        include("conexion.php");
        mysqli_query($db,"INSERT INTO propietarios(id_propietario,doc_propietario, nombres, apellidos) VALUES(NULL,'$doc_propietario','$nombres','$apellidos')");

      

        
    }
}
$nuevo=new propietarios();
$nuevo->registrar($_POST["doc_propietario"], $_POST["nombres"],$_POST["apellidos"]);



?>
</body>

</html>