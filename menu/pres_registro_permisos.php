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
        
        <h2 class="login-header">Permisos</h2>
      
        <form  method="POST" class="login-container" action="neg_dat_registro_permisos.php" required>
          <p><input type="text" name="documento" placeholder=" Ingrese el documento" required></p>
          <p><input type="text" name="fk_id_rol" placeholder="Ingrese el rol" required></p>
          <p><input type="submit" value="Guardar permisos"></p>
        </form>
        
    </div>

    </section>
   
</body>
</html>