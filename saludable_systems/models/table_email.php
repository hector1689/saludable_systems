<?php
$conexion = mysql_connect("localhost", "saludable") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("nutri_saludable", $conexion);
require("includes/funciones.php");
error_reporting(E_ALL ^ E_NOTICE);
$id_paciente = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");




?>