<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];


if(empty($usuario) || empty($pass)){
	header("Location: index.php");
	exit();
}

include("includes/conexion.php");


$result = mysql_query("SELECT * FROM administradores WHERE nombre_administrador = '".$usuario."' ",$conexion);

if($row = mysql_fetch_array($result)){
	if($row['password'] ==  $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;

		header("Location: inicio.php");
	}else{
		header("Location: index.php");
		exit();
	}
}else{
	header("Location: index.php");
	exit();
}


?>