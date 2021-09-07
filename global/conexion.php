<?php
	$servidor="mysql:dbname=".BASEDATOS.";host=".SERVIDOR;

	try{
		$pdo= new PDO(
			$servidor,USUARIO,CLAVE,
			array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
		);
		// echo "<script>alert('Conectado a la base de datos')</script>";
	}catch(PDOException $e){
		// echo "<script>alert('Error de conexión a la base de datos')</script>";
	}
?>