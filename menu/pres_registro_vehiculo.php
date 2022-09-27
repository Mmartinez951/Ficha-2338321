<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="Estilo3.css">
</head>
<body>
  <?php
  include("men.php");

  ?>
    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Vehiculo</h2>
      
        <form  method="POST" class="login-container" action="neg_dat_registro_vehiculo.php" required>
          <p><input type="text" name="placa" placeholder=" Ingrese la placa del vehiculo"></p>
          <p><input type="text" name="marca" placeholder="Ingrese la marca" required></p>
          <p><input type="text" name="modelo" placeholder="Ingrese el modelo del vehiculo" required></p>
          <p><input type="text" name="tipo_de_vehiculo" placeholder="Ingrese el tipo de vehiculo" required></p>
          <p><input type="number" name="mecanico" placeholder="Ingrese el codigo del mecanico" required></p>
          <p><input type="text" name="estado" placeholder="Ingrese el estado del vehiculo" required></p>
          <p><input type="text" name="descripcion" placeholder="Ingrese la descripcion en la que entro el vehiculo" required></p>
          <p><input type="number" name="doc_propietario" placeholder="Ingrese el documento del propietario" required></p>
          <p><input type="submit" value="Guardar Vehiculo"></p>
        </form>
        
    </div>

    </section>
   
</body>
</html>