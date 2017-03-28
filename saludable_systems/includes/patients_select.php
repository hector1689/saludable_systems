 <?php  
include("conexion.php");
  $consulta_mysql='SELECT * FROM datos_personales';
  $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  echo "<label >Selecciona al Paciente</label>";
  echo "<select  id='cname' class='unselected' name='patient_email' required>";
  echo "<option></option>";
  while($fila=mysql_fetch_array($resultado_consulta_mysql)){
    echo "<option value='".$fila['email']."'>".$fila['nombre_paciente']."</option>";
    }
  echo "</select>";

  ?>