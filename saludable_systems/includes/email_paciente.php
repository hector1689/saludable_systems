<?php 
$conexion = mysql_connect("localhost", "saludable") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("nutri_saludable", $conexion);
require("includes/funciones.php");
error_reporting(E_ALL ^ E_NOTICE);
$id_paciente = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");


$sql = "SELECT datos_personales.*, antecedentes_salud.*, aspectos_ginecologicos.*, dario_actividades.*, bioquimica.*, acta_diabetico.* FROM datos_personales INNER JOIN antecedentes_salud ON datos_personales.id_paciente = antecedentes_salud.id_antecedente INNER JOIN aspectos_ginecologicos ON antecedentes_salud.id_antecedente = aspectos_ginecologicos.id_ginecologico INNER JOIN dario_actividades ON aspectos_ginecologicos.id_ginecologico = dario_actividades.id_actividad INNER JOIN bioquimica ON dario_actividades.id_actividad = bioquimica.id_bioquimica INNER JOIN acta_diabetico ON bioquimica.id_bioquimica = acta_diabetico.id_diabetico WHERE datos_personales.id_paciente = ".sqlValue($id_paciente, "int"); 
$queEmp = mysql_query($sql, $conexion);
$rsEmp = mysql_fetch_assoc($queEmp);
$total = mysql_num_rows($queEmp);

if ($total == 0) {
 
  
  exit;
}



 ?>