
<?php
$conexion = mysql_connect("localhost", "saludable") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("nutri_saludable", $conexion);
require("funciones.php");
error_reporting(E_ALL ^ E_NOTICE);
$id_paciente = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");

if ($action == "edit") {
  $id_paciente = sqlValue($_POST["id_paciente"], "int");
  $nombre_paciente = sqlValue($_POST["nombre_paciente"], "text");
  $edad = sqlValue($_POST["edad"], "text");
  $sexo = sqlValue($_POST["sexo"], "text");
  $fecha_nacimiento = sqlValue($_POST["fecha_nacimiento"], "date");
  $estado_civil = sqlValue($_POST["estado_civil"], "text");
  $escolaridad = sqlValue($_POST["escolaridad"], "text");
  $ocupacion = sqlValue($_POST["ocupacion"], "text");
  $direccion = sqlValue($_POST["direccion"], "text");
  $telefono = sqlValue($_POST["telefono"], "text");
  $email = sqlValue($_POST["email"], "text");
  $motivo_consulta = sqlValue($_POST["motivo_consulta"], "text");
  $fecha_elaboracion = sqlValue($_POST["fecha_elaboracion"], "date");

   $id_antecedente = sqlValue($_POST["id_antecedente"], "int");
  $diarrea = sqlValue($_POST["diarrea"], "text");
  $estrenimiento = sqlValue($_POST["estrenimiento"], "text");
  $gastritis = sqlValue($_POST["gastritis"], "text");
  $ulcera = sqlValue($_POST["ulcera"], "text");
  $nausea = sqlValue($_POST["nausea"], "text");
  $pirosis = sqlValue($_POST["pirosis"], "text");
  $vomito = sqlValue($_POST["vomito"], "text");
  $colitis = sqlValue($_POST["colitis"], "text");
  $dentadura = sqlValue($_POST["dentadura"], "text");
  $otros = sqlValue($_POST["otros"], "text");
  $observaciones = sqlValue($_POST["observaciones"], "text");
  $enfermedad_diagnosticada = sqlValue($_POST["enfermedad_diagnosticada"], "text");
  $enfermedad_importante = sqlValue($_POST["enfermedad_importante"], "text");
  $medicamento = sqlValue($_POST["medicamento"], "text");
  $cual = sqlValue($_POST["cual"], "text");
  $dosis_antecedente = sqlValue($_POST["dosis"], "text");
  $desde_cuando = sqlValue($_POST["desde_cuando"], "text");
  $laxantes = sqlValue($_POST["laxantes"], "text");
  $diureticos = sqlValue($_POST["diureticos"], "text");
  $antiacidos = sqlValue($_POST["antiacidos"], "text");
  $analgesicos = sqlValue($_POST["analgesicos"], "text");
  $cirugia = sqlValue($_POST["cirugia"], "text");
  $obesidad = sqlValue($_POST["obesidad"], "text");
  $diabetis = sqlValue($_POST["diabetis"], "text");
  $hta = sqlValue($_POST["hta"], "text");
  $cancer = sqlValue($_POST["cancer"], "text");
  $hipercolesterolemia = sqlValue($_POST["hipercolesterolemia"], "text");
  $hipertrigliceridemia = sqlValue($_POST["hipertrigliceridemia"], "text");


  $id_ginecologico = sqlValue($_POST["id_ginecologico"], "int");
  $embarazo = sqlValue($_POST["embarazo"], "text");
  $referido_paciente = sqlValue($_POST["referido_paciente"], "text");
  $por_fum = sqlValue($_POST["por_fum"], "text");
  $anticonceptivos_orales = sqlValue($_POST["anticonceptivos_orales"], "text");
  $cual_anticonceptivo = sqlValue($_POST["cual_anticonceptivo"], "text");
  $dosis_anticonceptivo = sqlValue($_POST["dosis_anticonceptivo"], "text");
  $climaterio = sqlValue($_POST["climaterio"], "text");
  $fecha = sqlValue($_POST["fecha"], "date");
  $terapia_hormonal = sqlValue($_POST["terapia_hormonal"], "text");
  $cual_hormonal = sqlValue($_POST["cual_hormonal"], "text");
  $dosis_hormonal = sqlValue($_POST["dosis_hormonal"], "text");

  $id_capacitacion_recibida = sqlValue($_POST["id_capacitacion_recibida"], "int");
  $nombre_curso_recibida = sqlValue($_POST["nombre_curso_recibida"], "text");
  $impartio_curso = sqlValue($_POST["impartio_curso"], "text");
  $tipo_curso = sqlValue($_POST["tipo_curso"], "text");
  $fecha_inicio_recibida = sqlValue($_POST["fecha_inicio_recibida"], "date");
  $fecha_finalizo_recibida = sqlValue($_POST["fecha_finalizo_recibida"], "date");
  $duracion_curso = sqlValue($_POST["duracion_curso"], "text");
  $observacion_curso = sqlValue($_POST["observacion_curso"], "text");

  $id_actividad = sqlValue($_POST["id_actividad"], "int");
  $actividad_desayuno = sqlValue($_POST["actividad_desayuno"], "text");
  $actividad_comida = sqlValue($_POST["actividad_comida"], "text");
  $actividad_dormir = sqlValue($_POST["actividad_dormir"], "text");
  $actictividad_diaria = sqlValue($_POST["actictividad_diaria"], "text");
  $tipo_ejercicio = sqlValue($_POST["tipo_ejercicio"], "text");
  $frecuencia_ejercicio = sqlValue($_POST["frecuencia_ejercicio"], "text");
  $duracion_ejercicio = sqlValue($_POST["duracion_ejercicio"], "text");
  $inicio_ejercicio = sqlValue($_POST["inicio_ejercicio"], "text");
  $consumo_alcohol = sqlValue($_POST["consumo_alcohol"], "text");
  $consumo_tabaco = sqlValue($_POST["consumo_tabaco"], "text");
  $consumo_cafe = sqlValue($_POST["consumo_cafe"], "text");
  $aspecto_general = sqlValue($_POST["aspecto_general"], "text");
  $presion_arterial = sqlValue($_POST["presion_arterial"], "text");
  $tipo_presion = sqlValue($_POST["tipo_presion"], "text");
  $hora_registro = sqlValue($_POST["hora_registro"], "text");
  $brazo_derecho = sqlValue($_POST["brazo_derecho"], "text");


  $id_bioquimica = sqlValue($_POST["id_bioquimica"], "int");
  $bioquimico_relevante = sqlValue($_POST["bioquimico_relevante"], "text");
  $solicitud_analisis = sqlValue($_POST["solicitud_analisis"], "text");
  $tipo_analisis = sqlValue($_POST["tipo_analisis"], "text");


  $id_diabetico = sqlValue($_POST["id_diabetico"], "int");
  $comidas_dia = sqlValue($_POST["comidas_dia"], "text");
  $comidas_casa = sqlValue($_POST["comidas_casa"], "text");
  $comidas_fuera = sqlValue($_POST["comidas_fuera"], "text");
  $horario_comida = sqlValue($_POST["horario_comida"],"text");
  $prepara_alimento = sqlValue($_POST["prepara_alimento"],"text");
  $come_entrecomidas = sqlValue($_POST["come_entrecomidas"], "text");
  $que_come = sqlValue($_POST["que_come"], "text");
  $modificacion_alimentaria = sqlValue($_POST["modificacion_alimentaria"], "text");
  $motivo_modificacion = sqlValue($_POST["motivo_modificacion"], "text");
  $como_modificacion = sqlValue($_POST["como_modificacion"],"text");
  $apetito_alimentacion = sqlValue($_POST["apetito_alimentacion"],"text");
  $hora_ambre = sqlValue($_POST["hora_ambre"], "text");
  $alimento_preferido = sqlValue($_POST["alimento_preferido"], "text");
  $alimento_nopreferido = sqlValue($_POST["alimento_nopreferido"], "text");
  $alimento_malestar = sqlValue($_POST["alimento_malestar"], "text");
  $alergia_alimento = sqlValue($_POST["alergia_alimento"],"text");
  $suplemento_complemento = sqlValue($_POST["suplemento_complemento"],"text");
  $cual_suplemento = sqlValue($_POST["cual_suplemento"], "text");
  $dosis_suplemento = sqlValue($_POST["dosis_suplemento"], "text");
  $motivo_suplemento = sqlValue($_POST["motivo_suplemento"], "text");
  $actitud_paciente = sqlValue($_POST["actitud_paciente"],"text");
  $motivo_actitud = sqlValue($_POST["motivo_actitud"],"text");
  $sal_comida = sqlValue($_POST["sal_comida"], "text");
  $grasa_casa = sqlValue($_POST["grasa_casa"], "text");
  $dieta_especial = sqlValue($_POST["dieta_especial"], "text");
  $cuantas_dieta = sqlValue($_POST["cuantas_dieta"], "text");
  $tipo_dieta = sqlValue($_POST["tipo_dieta"],"text");
  $hace_dieta = sqlValue($_POST["hace_dieta"],"text");
  $tiempo_dieta = sqlValue($_POST["tiempo_dieta"], "text");
  $razon_dieta = sqlValue($_POST["razon_dieta"], "text");
  $apego_dieta = sqlValue($_POST["apego_dieta"], "text");
  $resultado_dieta = sqlValue($_POST["resultado_dieta"], "text");
  $medicamentos_peso = sqlValue($_POST["medicamentos_peso"],"text");
  $cuales_medicamentos = sqlValue($_POST["cuales_medicamentos"],"text");
  $desayuno_acta = sqlValue($_POST["desayuno_acta"], "text");
  $colacion_desayuno = sqlValue($_POST["colacion_desayuno"], "text");
  $comida_acta = sqlValue($_POST["comida_acta"], "text");
  $colacion_comida = sqlValue($_POST["colacion_comida"], "text");
  $cena_acta = sqlValue($_POST["cena_acta"], "text");
  $colacion_cena = sqlValue($_POST["colacion_cena"], "text");
  $vasos_agua = sqlValue($_POST["vasos_agua"], "text");
  $vasos_bebida = sqlValue($_POST["vasos_bebida"], "text");
  $cambios_fin_semana = sqlValue($_POST["cambios_fin_semana"], "text");



  
  $sql = "UPDATE datos_personales SET ";
  $sql.= "nombre_paciente =".$nombre_paciente.", edad=".$edad.", sexo=".$sexo.", fecha_nacimiento=".$fecha_nacimiento.", estado_civil=".$estado_civil.", escolaridad=".$escolaridad.", ocupacion=".$ocupacion.",direccion=".$direccion.",telefono=".$telefono.",email=".$email.",motivo_consulta=".$motivo_consulta." ,fecha_elaboracion=".$fecha_elaboracion."  ";
  $sql.= "WHERE id_paciente=".$id_paciente;

  mysql_query($sql, $conexion);

  $sql2 = "UPDATE antecedentes_salud SET ";
  $sql2.= "diarrea=".$diarrea.", estrenimiento=".$estrenimiento.", gastritis=".$gastritis.", ulcera=".$ulcera." , nausea=".$nausea.", pirosis=".$pirosis.",vomito=".$vomito.", colitis=".$colitis.", dentadura=".$dentadura.", otros=".$otros.", observaciones=".$observaciones.", enfermedad_diagnosticada=".$enfermedad_diagnosticada.", enfermedad_importante=".$enfermedad_importante.", medicamento=".$medicamento.", cual=".$cual.", dosis=".$dosis_antecedente.", desde_cuando=".$desde_cuando.", laxantes=".$laxantes.", diureticos=".$diureticos.", antiacidos=".$antiacidos.", analgesicos=".$analgesicos.", cirugia=".$cirugia.", obesidad=".$obesidad.", diabetis=".$diabetis.", hta=".$hta.", cancer=".$cancer.", hipercolesterolemia=".$hipercolesterolemia.", hipertrigliceridemia=".$hipertrigliceridemia." ";
  $sql2.= "WHERE id_antecedente=".$id_antecedente;

  mysql_query($sql2, $conexion);

  $sql3 = "UPDATE aspectos_ginecologicos SET ";
  $sql3.= "embarazo=".$embarazo.", referido_paciente=".$referido_paciente.",por_fum=".$por_fum.", anticonceptivos_orales=".$anticonceptivos_orales." ,cual_anticonceptivo=".$cual_anticonceptivo.", dosis_anticonceptivo=".$dosis_anticonceptivo.", climaterio=".$climaterio.",fecha=".$fecha." ,terapia_hormonal=".$terapia_hormonal.",cual_hormonal=".$cual_hormonal.",dosis_hormonal=".$dosis_hormonal." ";
  $sql3.= "WHERE id_ginecologico=".$id_ginecologico;

  mysql_query($sql3, $conexion);
  
  
  $sql4 = "UPDATE dario_actividades SET ";
  $sql4.= "actividad_desayuno=".$actividad_desayuno.", actividad_comida=".$actividad_comida.", actividad_dormir=".$actividad_dormir.", actictividad_diaria=".$actictividad_diaria." ,tipo_ejercicio=".$tipo_ejercicio.", frecuencia_ejercicio   =".$frecuencia_ejercicio.", duracion_ejercicio=".$duracion_ejercicio." , inicio_ejercicio=".$inicio_ejercicio.", consumo_alcohol=".$consumo_alcohol.", consumo_tabaco=".$consumo_tabaco.", consumo_cafe=".$consumo_cafe.", aspecto_general=".$aspecto_general.", presion_arterial=".$presion_arterial.", tipo_presion=".$tipo_presion.", hora_registro=".$hora_registro.", brazo_derecho=".$brazo_derecho." ";
  $sql4.= "WHERE id_actividad=".$id_actividad;

  mysql_query($sql4, $conexion);

  $sql5 = "UPDATE bioquimica SET ";
  $sql5.= "bioquimico_relevante=".$bioquimico_relevante.", solicitud_analisis=".$solicitud_analisis.",  tipo_analisis=".$tipo_analisis." ";
  $sql5.= "WHERE id_bioquimica=".$id_bioquimica;

  mysql_query($sql5, $conexion);



  $sql6 = "UPDATE acta_diabetico SET ";
  $sql6.= "comidas_dia=".$comidas_dia.",comidas_casa=".$comidas_casa.", comidas_fuera=".$comidas_fuera.",horario_comida=".$horario_comida.", prepara_alimento=".$prepara_alimento.", come_entrecomidas=".$come_entrecomidas.",que_come=".$que_come.",modificacion_alimentaria=".$modificacion_alimentaria.",motivo_modificacion=".$motivo_modificacion.", como_modificacion=".$como_modificacion.", apetito_alimentacion=".$apetito_alimentacion.",hora_ambre=".$hora_ambre.",alimento_preferido=".$alimento_preferido.",alimento_nopreferido=".$alimento_nopreferido.", alimento_malestar=".$alimento_malestar." , alergia_alimento=".$alergia_alimento.", suplemento_complemento=".$suplemento_complemento.", cual_suplemento=".$cual_suplemento.", dosis_suplemento=".$dosis_suplemento.", motivo_suplemento=".$motivo_suplemento.", actitud_paciente=".$actitud_paciente.", motivo_actitud=".$motivo_actitud.", sal_comida=".$sal_comida.", grasa_casa=".$grasa_casa.", dieta_especial=".$dieta_especial.", cuantas_dieta=".$cuantas_dieta.", tipo_dieta=".$tipo_dieta.", hace_dieta=".$hace_dieta.", tiempo_dieta=".$tiempo_dieta.", razon_dieta=".$razon_dieta.", apego_dieta=".$apego_dieta.", resultado_dieta=".$resultado_dieta.", medicamentos_peso=".$medicamentos_peso.", cuales_medicamentos=".$cuales_medicamentos.", desayuno_acta=".$desayuno_acta.", colacion_desayuno=".$colacion_desayuno." , comida_acta=".$comida_acta.", colacion_comida=".$colacion_comida.", cena_acta=".$cena_acta.", colacion_cena=".$colacion_cena.", vasos_agua=".$vasos_agua.", vasos_bebida=".$vasos_bebida.", cambios_fin_semana=".$cambios_fin_semana." ";
  $sql6.= "WHERE id_diabetico=".$id_diabetico;

  mysql_query($sql6, $conexion);



   echo "<script> alert('Se Edito Correctamente');
    window.location='inicio.php';
    </script>";

}

$sql = "SELECT datos_personales.*, antecedentes_salud.*, aspectos_ginecologicos.*, dario_actividades.*, bioquimica.*, acta_diabetico.* FROM datos_personales INNER JOIN antecedentes_salud ON datos_personales.id_paciente = antecedentes_salud.id_antecedente INNER JOIN aspectos_ginecologicos ON antecedentes_salud.id_antecedente = aspectos_ginecologicos.id_ginecologico INNER JOIN dario_actividades ON aspectos_ginecologicos.id_ginecologico = dario_actividades.id_actividad INNER JOIN bioquimica ON dario_actividades.id_actividad = bioquimica.id_bioquimica INNER JOIN acta_diabetico ON bioquimica.id_bioquimica = acta_diabetico.id_diabetico WHERE datos_personales.id_paciente = ".sqlValue($id_paciente, "int"); 
$queEmp = mysql_query($sql, $conexion);
$rsEmp = mysql_fetch_assoc($queEmp);
$total = mysql_num_rows($queEmp);

if ($total == 0) {
 
   echo "<script> alert('Se Edito Correctamente');
    window.location='inicio.php';
    </script>";

  exit;
}

?>