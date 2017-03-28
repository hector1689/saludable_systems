<?php


extract($_REQUEST);
//Conectamos al servidor y a la BD
$con = mysql_connect("localhost","saludable")
   or die("¡No se ha podido establecer la conexión con el servidor!");
$resp = mysql_select_db("nutri_saludable")
   or die("¡No se ha podido seleccionar la base de datos!");

//Armamos la cadena y hacemos la consulta:
$consultasql ="DELETE datos_personales.*, antecedentes_salud.*, aspectos_ginecologicos.*, dario_actividades.*, bioquimica.*, acta_diabetico.* FROM datos_personales INNER JOIN antecedentes_salud ON datos_personales.id_paciente = antecedentes_salud.id_antecedente INNER JOIN aspectos_ginecologicos ON antecedentes_salud.id_antecedente = aspectos_ginecologicos.id_ginecologico INNER JOIN dario_actividades ON aspectos_ginecologicos.id_ginecologico = dario_actividades.id_actividad INNER JOIN bioquimica ON dario_actividades.id_actividad = bioquimica.id_bioquimica INNER JOIN acta_diabetico ON bioquimica.id_bioquimica = acta_diabetico.id_diabetico WHERE datos_personales.id_paciente = ".$id;

$resultadosql = mysql_query($consultasql)
   or die("¡No se ha podido eliminar el registro!");


	echo "<script> alert('Se Borro Correctamente el Paciente');
		window.location='../inicio.php';
		</script>";

	
?>