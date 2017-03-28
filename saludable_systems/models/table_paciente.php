<?php
  include_once("includes/conexion2.php");

  $con = new DB;
  $pacientes = $con->conectar();
  $strConsulta = "SELECT * from datos_personales ORDER BY id_paciente ASC";
  $pacientes = mysql_query($strConsulta);
  $numfilas = mysql_num_rows($pacientes);
  
  echo '<table  data-max="13" class="responsive turquoise">';
  echo '<thead>
           

  <tr>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Sexo</th>
    <th>Fecha de Nacimiento</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Motivo de Consulta</th>
    <th>&nbsp;</th>
    <th>Acciones</th>
    <th>&nbsp;</th>
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
    echo '<td>'.$fila['telefono'].'</td>';
    echo '<td>'.$fila['email'].'</td>';
    echo '<td>'.$fila['motivo_consulta'].'</td>';
    echo '<td><a href="editar.php?id='.$fila['id_paciente'].'"><button class="small green"><i class="icon-pencil icon-1x"></i> Editar</button></a></td>';
    echo '<td><a href="includes/reporte_historial.php?id='.$fila['id_paciente'].'" target="_blank"><button class="small turquoise"><i class="icon-file-text icon-1x"></i> Clinico</button></a></td>';
    echo '<td><a href="dietas.php?id='.$fila['id_paciente'].'" ><button class="small question"><i class="icon-envelope icon-1x"></i> Dietas</button></a></td>';
    echo '<td><a class="paciente" href="includes/borrar_paciente.php?id='.$fila['id_paciente'].'"><button class="small red"><i class="icon-trash icon-1x"></i> Borrar</button></a></td>';
    echo '</tr>';
  }
  echo "</table>";
?>     