<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
    <link rel="stylesheet" href="Estilo3.css">
</head>
<body>
  <?php
  include("men.php");

  ?>
    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Propietarios</h2>
      
        <form  method="POST" class="login-container" action="neg_dat_registro_propietarios.php" required>
          <p><input type="number" name="doc_propietario" placeholder=" Ingrese el documento del propietario" required></p>
          <p><input type="text" name="nombres" placeholder="Ingrese el nombre" required></p>
          <p><input type="text" name="apellidos" placeholder="Ingrese el apellido" required></p>
          <p><input type="submit" value="Guardar permisos"></p>
        </form>
        
    </div>

    </section>
   
</body>
</html>