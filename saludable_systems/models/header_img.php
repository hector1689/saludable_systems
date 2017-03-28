<?php 

include("includes/conexion.php");

  $resultado_consulta_mysql=mysql_query("SELECT * FROM ajustes_color ",$conexion);
  while($fila=mysql_fetch_array($resultado_consulta_mysql)){
    $color_head = $fila['color_head'];
    $color_text = $fila['color_text'];
    //$consultorio = $fila['nombre_consultorio'];
    }

 ?>



<style type="text/css" media="screen">

.img{
	height: 400px;
	width: 100%;
	background:#000;
}
.name {
	position: relative;
	top:-250px;
	text-align: center;
 	font-size: 40px;
	color: #fff;
	font-family: "Times New Roman", Times, sans-serif;
}
	
</style>

<div  class="img"></div>
<div class="name">
<h1>Saludable System</h1>
</div>
