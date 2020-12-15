<?php
 include 'codigoregistro.php';
 ?>


<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <title>REGISTRATE</title>
    
        <link rel="stylesheet" href="IMAGENES/">
        <link rel="stylesheet" href="CSS/registrosocios.css">
        <link rel="stylesheet" href="iconos/css/fontello.css">
        
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-sclale=1.0,maximum-scale=1.0,minimum-scale=1.0">


    </head>
    <body>

        <header>
            <div id="logo"><img src="IMAGENES/logo.png" class="img-logo"></div>
             
    
        <input type="checkbox" id="check"> <!-- esta es la parte del desplegable del menu, para cuando la pagina reduzca su tamaño -->
            <label for="check" class="icon-menu"></label>
         <nav class="menu">
            
    
            <ul> 
                <li><a href="index.html">Inicio</a></li>
                <li><a href="">Socios</a></li>
                <li><a href="">Actividades</a></li>
                
        
         </ul>
         </nav> 
        </header>




    <div class="container-all">  <!-- Aquí estará contenido el formulario y el texto de acompañamiento (todo)-->

        <div class="container-form"> <!-- Aquí se guardara la parte del formulario-->
          
          <h1 class="title">Registrarse</h1>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  <!-- Asi el formulario estará esperando la llamada cuando se le de clic al boton de registrarse haga una función-->
              <label for="">Nombres:</label>
              <input type="text" name="nombre">
              <span class="message-error"><?php echo $nombre_err; ?></span>
              
              <label for="">Apellidos:</label>
              <input type="text" name="apellido">
              <span class="message-error"><?php echo $apellido_err; ?></span>
              
              <label for="">DNI:</label>
              <input type="text" name="DNI">
              <span class="message-error"><?php echo $DNI_err; ?></span>

              <label for="">Ingrese una vez más su DNI:</label>
              <input type="text" name="dni">
              
              
              <label for="">Número de cuenta:</label>
              <input type="text" name="cuenta">
              <span class="message-error"><?php echo $cuenta_err; ?></span>
              
              <label for="">Telefono:</label>
              <input type="text" name="telefono">
              <span class="message-error"><?php echo $telefono_err; ?></span>
              
              <label for="">Correo electrónico:</label>
              <input type="email" name="email">
              <span class="message-error"><?php echo $email_err; ?></span>
              
              <label for="">Contraseña:</label>
              <input type="text" name="pass">
              

              
              <input type="submit" value="Registrarse">
          </form>
         
     
          <span class="text-footer">Recuerde que al número de cuenta proporcionado será efectuada la mensualidad hasta el dia que se de por baja. ¿Ya tienes una cuenta? <a href="socios.php">Inicia sesión.</a></span>
            
        </div>

    </body> 
        
    </html>
