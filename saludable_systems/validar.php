<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
	header("Location: index.php");
	exit();
}

mysql_connect('localhost','saludable') or die("Error al conectar " . mysql_error());
mysql_select_db('nutri_saludable') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from administradores where nombre_administrador='" . $usuario . "'");

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