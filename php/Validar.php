



<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "asdzxcqwe123..", "ferreteria");
$consulta = "SELECT * FROM usuario_login WHERE usuario='$usuario'and contrasena='$clave'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    header("location:../index.html");
}
else{
    echo "Error en la auntentificaion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
