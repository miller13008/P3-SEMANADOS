<?php 
//condicion de redireccionamiento de pagina (si se inicia sesion, que nos lleve a la pagina de inicio de los socios)
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION ["loggedin"]== true){
    header("location: iniciosocios.html");
    exit;
}
//solcitando la conexion
require_once "conexion.php";
//inicializando variables
$DNI = $password = "";
$DNI_err = $password = "";
//si el formulario se envia:
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //si el campo "DNI" esta vacio, que nos muestre el siguiente error,sino que se ejecute:
    if(empty(trim($_POST["DNI"]))){
        $DNI_err = "Por favor, ingrese su DNI";
    }else{
        $DNI = trim($_POST["DNI"]);
    }
    //si el campo "password" esta vacio, que nos muestre el siguiente error, sino que se ejecute:
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, ingrese su constraseña";
    }else{
        $password = trim($_POST["password"]);
    }



    //validar credenciales
    if(empty($DNI_err) && empty($password_err)){
        
    }
}

?>