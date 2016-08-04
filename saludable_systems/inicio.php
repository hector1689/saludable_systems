<!DOCTYPE html>
<?php

session_start();

?>


<html>
<head>
	<title>Saludable System</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon"  href="image/logo_nutri.ico">
  <!-- Modernizr -->
<script src="groundwork-master/js/libs/modernizr-2.6.2.min.js"></script>
<!-- framework css -->
<!--[if gt IE 9]><!-->
<link type="text/css" rel="stylesheet" href="groundwork-master/css/groundwork.css">
<!--<![endif]-->
<!--[if lte IE 9]>
<link type="text/css" rel="stylesheet" href="/css/groundwork-core.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-type.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-ui.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-anim.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-ie.css">
<![endif]-->


</head>
<body >
    <nav role="navigation" class="nav green">
      <ul>
       <li><a href="index.php" title="Inicio">Inicio <i class="icon-home icon-1x"></i></a></li>
      </ul>
    </nav>
	       <article class="row">
        <section class="four fourths  padded bounceInDown animated"><img src="image/color.png" alt="">
        <fieldset>
        <legend>Usuario <i class="icon-user icon-1x"></i></legend>
         <div class="one half ">
          <p class="message turquoise"><?php echo "Usuario: Hola " . $_SESSION['usuario'];?>&nbsp;&nbsp;<a href="logout.php" value="Alerta" onClick="alerta()">Cerrar Sesion <i class="icon-signout icon-1x"></i></a></p>  
          </div>
        </fieldset>
          <hr><img src="image/logo_grecia.png" width="150px" height="150px" class="pull-left gap-right">
          <h1>CLIENTES <i class="icon-group icon-1x"></i></h1> 
          <a href="captura.php" title="Agregar Paciente"><button class="info">Agregar Paciente <i class="icon-plus-sign-alt icon-1x"></i></button></a>
          <br>
          <fieldset> 
        <legend>Informacion Paciente <i class="icon-book icon-1x"></i></legend>
          <p>

<?php
  include_once("conexion2.php");

  $con = new DB;
  $pacientes = $con->conectar();
  $strConsulta = "SELECT * from datos_personales ORDER BY id_paciente ASC";
  $pacientes = mysql_query($strConsulta);
  $numfilas = mysql_num_rows($pacientes);
  
  echo '<table  data-max="14" class="responsive turquoise">';
  echo '<thead>
           

  <tr>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Sexo</th>
    <th>Fecha de Nacimiento</th>
    <th>Estado Civil</th>
    <th>Escolaridad</th>
    <th>Ocupacion</th>
    <th>Dirección</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Motivo de Consulta</th>
    <th>Fecha de Elaboracion</th>
    <th>&nbsp;</th>
    <th>Acciones</th>
    <th>&nbsp;</th>
  </tr>
            </thead>';
  for ($i=0; $i<$numfilas; $i++)
  {
    $fila = mysql_fetch_array($pacientes);
    $numlista = $i + 1;
    echo '<tr>';
    echo '<td>'.$fila['nombre_paciente'].'</td>';
    echo '<td>'.$fila['edad'].'</td>';
    echo '<td>'.$fila['sexo'].'</td>';
    echo '<td>'.$fila['fecha_nacimiento'].'</td>';
    echo '<td>'.$fila['estado_civil'].'</td>';
    echo '<td>'.$fila['escolaridad'].'</td>';
    echo '<td>'.$fila['ocupacion'].'</td>';
    echo '<td>'.$fila['direccion'].'</td>';
    echo '<td>'.$fila['telefono'].'</td>';
    echo '<td>'.$fila['email'].'</td>';
    echo '<td>'.$fila['motivo_consulta'].'</td>';
    echo '<td>'.$fila['fecha_elaboracion'].'</td>';
    echo '<td><a href="editar.php?id='.$fila['id_paciente'].'"><button class="small green"><i class="icon-pencil icon-1x"></i> Editar</button></a></td>';
    echo '<td><a href="borrar_paciente.php?id='.$fila['id_paciente'].'"><button class="small red"><i class="icon-trash icon-1x"></i> Borrar</button></a></td>';
    echo '<td><a href="reporte_historial.php?id='.$fila['id_paciente'].'"><button class="small turquoise"><i class="icon-file-text icon-1x"></i> Clinico</button></a></td>';
    echo '</tr>';
  }
  echo "</table>";
?>      
 
			
         </p>
         </fieldset>
        </section>

      </article>
 <footer class="gap-top bounceInUp animated">
      <div class="box square charcoal">
        <div class="container padded">

        </div>
      </div>
      <div class="box square">
        <div class="container padded">
          <div class="row">
            <div class="one half padded">
            
            </div>
            <div class="one half padded">
              <p class="large padded align-right align-center-small-tablet"><a href="http://twitter.com/groundworkcss" target="_blank" title="@groundworkcss" style="text-decoration:none;" class="large inline gapped"></a><a href="http://github.com/groundworkcss" target="_blank" title="@groundworkcss" style="text-decoration:none;" class="large inline gapped"></a><a href="mailto:groundworkcss@gmail.com" title="groundworkcss@gmail.com" style="text-decoration:none;" class="large inline gapped"></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


	<script type="text/javascript" src="groundwork-master/js/libs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="groundwork-master/js/groundwork.all.js"></script>
</body>
</html>



