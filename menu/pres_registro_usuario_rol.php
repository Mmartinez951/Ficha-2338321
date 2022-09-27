<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario usuario rol</title>
    <link rel="stylesheet" href="Estilo3.css">
</head>
<body>
  <?php
  include("men.php");

  ?>
    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Usuario rol</h2>
      
        <form  method="POST" class="login-container" action="neg_dat_registro_usuario_rol.php" required>
          <p><input type="text" name="rol_id" placeholder="Ingrese el rol" required></p>
          <p><input type="submit" value="Guardar usuario rol"></p>
        </form>
        
    </div>

    </section>
   
</body>
</html>