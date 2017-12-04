<?php
class Conexion
{

	function conectar()
	{

		$host='localhost';
		$db = 'ferreteria';
		$username = 'galileo';
		$password = 'galileo';
		$port = 5432;


		$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

		try{
			// creacion de una nueva conexion a postgresql
			$conn = new PDO($dsn);

			// si la conexion fue exitosa mostrara el siguiente mensaje
			if($conn){
				echo "Conectado a la<strong>$db</strong>  correctamente! ";
			}
		}catch (PDOException $e){
			// report error message
			echo $e->getMessage();
		}
	}
}

?>
