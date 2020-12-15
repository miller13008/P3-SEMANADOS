<?php
 include 'codigosocios.php';
 ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>INICIA SESION</title>
    
        <link rel="stylesheet" href="IMAGENES/">
        <link rel="stylesheet" href="CSS/socios.css">
        <link rel="stylesheet" href="iconos/css/fontello.css">
        
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-sclale=1.0,maximum-scale=1.0,minimum-scale=1.0">


    </head>
    <body>

        <header> 
            <div id="logo">
            <img src="IMAGENES/logo.png">
            </div>
             
    
        <input type="checkbox" id="check"> <!-- esta es la parte del desplegable del menu, para cuando la pagina reduzca su tamaño -->
            <label for="check" class="icon-menu"></label>
         <nav class="menu">
            
    
            <ul> 
                <li><a href="index.html">Inicio</a></li>
                <li><a href=""style="">Socios</a></li>
                <li><a href="">Actividades</a></li>
                
        
         </ul>
         </nav> 
        </header>




    <div class="container-all">  <!-- Aquí estará contenido el formulario y el texto de acompañamiento (todo)-->

        <div class="container-form"> <!-- Aquí se guardara la parte del formulario-->
          
          <h1 class="title">Iniciar sesión</h1>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  <!-- Asi el formulario estará esperando la llamada cuando se le de clic al boton de registrarse haga una función-->
              <label for="">DNI:</label>
              <input type="text" name="email">
              <span class="message-error"><?php echo $email_err; ?></span>
              <label for="">Contraseña:</label>
              <input type="password" name="password">
              <span class="message-error"><?php echo $password_err; ?></span>

              <input type="submit" value="Entrar">
          </form>
            
            <span class="text-footer"> ¿Aún no tienes una cuenta? <a href="registrosocios.php">Registrate.</a>
            </span>
        </div>

        <!-- <div class="container-text">
        <div class="capa"></div>
        <h1 class="title-description">¿Que ventajas tiene ser socio?</h1>
        <p class="text-description">Podrá gozar de multiples beneficios premium, como acceso al área de spa, acceso ilimitado para usted y un 
        acompañante al área recreativa donde se imparten clases dinámicas y lúdicas. En POWER GYM contamos con las mejores instalaciones, además de los mejores profesionales especializados
        para dar acompañamiento personalizado de acuerdo a su requerimiento. Tenemos soporte de nutricion, seguros contra todo riesgo y estamos
        calificados para brindar asistencia médica si es el caso. Damos incentivos a nuestros socios para que se animen a vivir la vida fitness, 
        como; Multivitaminicos, pases VIP a entrenamientos privados, implementos deportivos y más.</p>
        </div>
        
    </div> -->

    </body> 
        
    </html>