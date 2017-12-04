<?php
if (!($_POST)) {
    header('Location:../404.html');
}
include_once('Conexion.php');
    class consultar extends Conexion
    {

        function consultando()
        {
    $mensajeOk=false;
    $mensajeError='El sistema no se encuentra disponible';
    if(isset($_POST['usuario'],$_POST['contrasena'])):
        if($_POST['usuario']!=""):
            if($_POST['contrasena']!=""):
                $Usuario = $_POST['usuario'];
                $Contrasena = $_POST['contrasena'];
                $consulta = pg_query ($dsn,("SELECT * FROM usuario WHERE usuario='Usuario' AND contrasena='Contrasena'"));
                if(pg_num_rows($consulta)>0):
                //if(pg_fetch_array($consulta)>0):
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
}
}
?>
