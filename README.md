# P3-SEMANADOS
<?php
    
    // Incluir archivo de conexion a la base de datos
    require_once "conexion.php";
    
    // Definir variable e inicializar con valores vacio
    $DNI = $email = $apellido = $nombre = $cuenta = $telefono = "";
    $DNI_err = $email_err = $apellido_err = $nombre_err = $cuenta_err = $telefono_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

         //validando el input de nombre
         if(empty(trim($_POST["nombre"]))){  //mediante el metodo post conectamos las variables (si la variable esta en blanco nos muestre el mensaje mediante la variable error)

            $nombre_err = "Debe ingresar su nombre";
        }else{
            $nombre = trim($_POST["nombre"]);
        }

        //validando el input de apellido
        if(empty(trim($_POST["apellido"]))){  //mediante el metodo post conectamos las variables (si la variable esta en blanco nos muestre el mensaje mediante la variable error)

            $apellido_err = "Debe ingresar su apellido";
        }else{
            $apellido = trim($_POST["apellido"]);
        }
        //validando el input de cuenta
        if(empty(trim($_POST["cuenta"]))){  //mediante el metodo post conectamos las variables (si la variable esta en blanco nos muestre el mensaje mediante la variable error)

            $cuenta_err = "Debe ingresar una cuenta valida";
        }else{
            $cuenta = trim($_POST["cuenta"]);
        }

        
        // VALIDANDO INPUT DE DNI
        if(empty(trim($_POST["DNI"]))){
            $DNI_err = "Por favor, ingrese su DNI";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT Dni FROM PERSONA WHERE Dni = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_DNI);
                
                $param_DNI = trim($_POST["DNI"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $DNI_err = "Este DNI ya está registrado";
                    }else{
                        $DNI = trim($_POST["DNI"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
        
        
        // VALIDANDO INPUT DE EMAIL
        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese un correo";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT Dni FROM PERSONA WHERE Correo = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                
                $param_email = trim($_POST["email"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_err = "Este correo ya está en uso";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
        
        // VALIDANDO INPUT DEL TELEFONO
         if(empty(trim($_POST["telefono"]))){
            $telefono_err = "Por favor, ingrese un telefono";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT Dni FROM PERSONA WHERE Telefono = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_telefono);
                
                $param_telefono = trim($_POST["telefono"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $telefono_err = "Este telefono ya está en uso";
                    }else{
                        $telefono = trim($_POST["telefono"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
        
       


        // COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
        if(empty($nombre_err) && empty($apellido_err) &&  empty($telefono_err) && empty($DNI_err) && empty($cuenta_err) && empty($email_err)){
            
            $sql = "INSERT INTO PERSONA (Dni, Nombre, Apellido, Telefono, Correo, CuentaBancaria) VALUES (?, ?, ?, ?, ?, ?)";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssssss", $param_DNI,$param_nombre,$param_apellido, $param_telefono, $param_email,$param_cuenta);
                
                // ESTABLECIENDO PARAMETRO
                $param_nombre = $nombre;
                $param_apellido = $apellido;
                $param_DNI = $DNI;
                $param_cuenta = $cuenta;
                $param_telefono = $telefono;
                $param_email = $email;
                //$param_password = password_hash($password, PASSWORD_DEFAULT); // ENCRIPTANDO CONTRASEÑA//
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: socios.php");
                }else{
                    echo "Algo Salio mal, intentalo despues";
                }
            }
        }
        
        
        
    }
    
?>
<?php
require_once "conexion.php";


$dni = mysqli_real_escape_string($link, $_POST['dni']);
$pass = mysqli_real_escape_string($link, $_POST['pass']);
$sql = "INSERT INTO SOCIO (Dni,Contrasenya) VALUES ('$dni', '$pass')";
if(mysqli_query($link, $sql));
mysqli_close($link);

?>
