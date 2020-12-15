<?php
require_once "conexion.php";


$dni = mysqli_real_escape_string($link, $_POST['dni']);
$pass = mysqli_real_escape_string($link, $_POST['pass']);
$sql = "INSERT INTO SOCIO (Dni,Contrasenya) VALUES ('$dni', '$pass')";
if(mysqli_query($link, $sql));
 

?>




<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <title>CONFIRMA</title>
    
        <link rel="stylesheet" href="IMAGENES/">
        <link rel="stylesheet" href="CSS/iniciosocios.css">
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



    <div id="formulario">
    <form method="POST"> 

    
    <label for="">Confirma tu DNI:</label>
    
    <input type="text"  name="dni">

    <label for="MODELO">Ingresa tu contraseña:</label>

    <input type="text"  name="pass" >

    <input type="submit" value="Enviar">




    </form>

    </body> 
        
    </html>
