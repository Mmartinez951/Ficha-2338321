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
        
        <h2 class="login-header">HISTORIAL</h2>
      
        <form  method="POST" class="login-container" action="neg_dat_registro_historial.php" required>
          <p><input type="text" name="cod_repuesto" placeholder=" Ingrese el codigo del repuesto" required></p>
          <p><input type="text" name="entrada" placeholder="ingrese la fecha de entrada" required></p>
          <p><input type="text" name="salida" placeholder="ingrese la fecha de salida" required></p>
          <p><input type="text" name="placa" placeholder="ingrese la placa del vehiculo" required></p>
          <p><input type="submit" value="Buscar"></p>
        </form>
        
    </div>

    </section>
   
</body>
</html>