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
        
        <h2 class="login-header">Observaciones</h2>
      
        <form  method="POST" class="login-container" action="neg_dat_registro_observaciones.php" required>
          <p><input type="text" name="placa" placeholder=" Ingrese la placa" required></p>
          <p><input type="text" name="descripcion_reparacion" placeholder="Descripcion de la reparación" required></p>
          <p><input type="number" name="documento" placeholder="Ingrese el  numro de documento" required></p>
           <p><input type="date" name="fecha_entrada" required></p>
            <p><input type="date" name="fecha_salida" required></p>
             <p><input type="file" name="imagenes"required></p>
          <p><input type="submit" value="Guardar observacion"></p>
        </form>
        
    </div>

    </section>
   
</body>
</html>