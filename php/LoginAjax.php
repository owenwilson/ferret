<?php
    include_once('Conexion.php');
    $mensajeOk=false;
    $mensajeError='El sistema no se encuentra disponible';
    if(isset($_POST['Usuario'],$_POST['Contrasena'])):
        if($_POST['Usuario']!=""):
            if($_POST['Contrasena']!=""):
                $Usuario = $_POST['Usuario'];
                $Contrasena = $_POST['Contrasena'];
                $consulta = pg_query ($Conexion,("SELECT * FROM usuario where Usuario='Usuario' and Contrasena='Contrasena'"));
                if(pg_num_rows($consulta)>0):
                    $mensajeOk = true;
                    $User = pg_fetch_array($consulta);
                    session_start();
                    $_SESSION['Id'] = $User[0];
                    $_SESSION['Usuario'] = $User[1];
                    $mensajeError = 'Accedio correctamente';
                else:
                    $mensajeError = 'Usuario o Clave incorrecto ';
                endif;
            else:
                $mensajeError = 'Contrasena Incorrecta';
            endif;
        else:
            $mensajeError = 'Usuario no Existe';
        endif;
    else:
        $mensajeError = 'Todos los datos son requeridos';
    endif;
    $salidaJson = $arrayName = array('respuesta' => $mensajeOk, 'mensaje' => $mensajeError);
    echo json_encode($salidaJson);
?>
