<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="indez,follow">
        <title>Registro</title>
        <meta name="viewport"content="width=device-width,initial-sclae=1.0,maximum-scale=1.0">
        <link rel="stylesheet" href="Estilo1.css">
    </head>
    <body>
        <section class="container">
            <id class="contact-box">
                <id class="left"></id>
                <div class="right">
                    <main>
                        <h2>Registro</h2>

                        <form  action="neg_dat_evaluarsesion.php" method="POST" required>
                            <input type="number" class="field"name="documento" placeholder="Indique el numero de documento">
                            <input type="password" name="contrasena"class="field" placeholder="Indique su contraseña">

                            <input type="submit" class="btn" name="register" value="Enviar"/>
                            <a href="#">Olvide mi contraseña</a>
                        </form>   
                    </main>
                 
                </div>
            </id>
        </section>
    </body>
</html>