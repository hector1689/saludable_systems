 <?php 
include ("includes/conexion.php");


$consulta = "SELECT * FROM datos_personales ORDER BY id_paciente";

$ejecutar_consulta = mysql_query($consulta,$conexion);


echo "<table data-max='14' class='responsive green'>";
echo "<thead>";
echo"<tr>";
echo "<th >#</th><th>Nombre</th><th>Edad</th><th>Sexo</th><th>Fecha de Nacimiento</th><th>Estado Civil</th><th>Ocupacion</th><th>Direccion</th><th>Telefono</th><th>Email</th><th>Consulta</th><th>Fecha de Elaboracion</th><th>Informacion Nutricional</th>";
echo"</tr>";
echo "</thead>";
while($registro = mysql_fetch_array($ejecutar_consulta)){
	echo "<tr>";
	echo "<td>" .$registro["id_paciente"]."</td>";
	echo "<td>" .$registro["nombre_paciente"]."</td>";
	echo "<td>" .$registro["edad"]."</td>";
	echo "<td>" .$registro["sexo"]."</td>";
	echo "<td>" .$registro["fecha_nacimiento"]."</td>";
	echo "<td>" .$registro["estado_civil"]."</td>";
	echo "<td>" .$registro["ocupacion"]."</td>";
	echo "<td>" .$registro["direccion"]."</td>";
	echo "<td>" .$registro["telefono"]."</td>";
	echo "<td>" .$registro["email"]."</td>";
	echo "<td>" .$registro["motivo_consulta"]."</td>";
	echo "<td>" .$registro["fecha_elaboracion"]."</td>";
	 echo '<td><a ><button type="submit" class="orange" ".$registro["id_paciente"]."><i class="icon-file icon-2x"></i>Informe</button></a>
	 <a ><button type="submit" class="orange" ".$registro["id_paciente"]."><i class="icon-file icon-2x"></i>Borrar</button></a>

	</td>';
	
	echo "</tr>";
	}
	echo "</table>";

mysql_close($conexion);

?>

	
