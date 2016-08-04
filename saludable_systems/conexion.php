<?php
error_reporting(E_ALL ^ E_DEPRECATED); 
$conexion = mysql_connect("localhost", "saludable") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("nutri_saludable", $conexion);
?>