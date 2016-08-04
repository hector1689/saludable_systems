<?php 
$host="localhost";
$user="saludable";
$bd ="nutri_saludable";

	
	if(isset($_POST['nombre_paciente'])&& !empty ($_POST['nombre_paciente']) &&
	isset($_POST['edad'])&& !empty ($_POST['edad']) &&
	isset($_POST['sexo'])&& !empty ($_POST['sexo']) &&
	isset($_POST['fecha_nacimiento'])&& !empty ($_POST['fecha_nacimiento']) &&
	isset($_POST['estado_civil'])&& !empty ($_POST['estado_civil'])&&
	isset($_POST['escolaridad'])&& !empty ($_POST['escolaridad']) &&
	isset($_POST['ocupacion'])&& !empty ($_POST['ocupacion']) &&
	isset($_POST['direccion'])&& !empty ($_POST['direccion']) &&
	isset($_POST['telefono'])&& !empty ($_POST['telefono']) &&
	isset($_POST['email'])&& !empty ($_POST['email']) &&
	isset($_POST['motivo_consulta'])&& !empty ($_POST['motivo_consulta']) &&
	isset($_POST['fecha_elaboracion'])&& !empty ($_POST['fecha_elaboracion'])){
	error_reporting(E_ALL ^ E_DEPRECATED); 
	
	$conexion=mysql_connect($host,$user)or die ("problemas con la conexion revisa bien tus variables");

	mysql_select_db($bd,$conexion);
	mysql_query("INSERT INTO datos_personales (nombre_paciente,edad,sexo,fecha_nacimiento,estado_civil,escolaridad,ocupacion,direccion,telefono,email,motivo_consulta,fecha_elaboracion) VALUES ('$_POST[nombre_paciente]','$_POST[edad]','$_POST[sexo]','$_POST[fecha_nacimiento]','$_POST[estado_civil]','$_POST[escolaridad]','$_POST[ocupacion]','$_POST[direccion]','$_POST[telefono]','$_POST[email]','$_POST[motivo_consulta]','$_POST[fecha_elaboracion]')",$conexion);
	
	

	}

	if(isset($_POST['diarrea'])&& !empty ($_POST['diarrea']) &&
	isset($_POST['estrenimiento'])&& !empty ($_POST['estrenimiento']) &&
	isset($_POST['gastritis'])&& !empty ($_POST['gastritis']) &&
	isset($_POST['ulcera'])&& !empty ($_POST['ulcera']) &&
	isset($_POST['nausea'])&& !empty ($_POST['nausea'])&&
	isset($_POST['pirosis'])&& !empty ($_POST['pirosis']) &&
	isset($_POST['vomito'])&& !empty ($_POST['vomito']) &&
	isset($_POST['colitis'])&& !empty ($_POST['colitis']) &&
	isset($_POST['dentadura'])&& !empty ($_POST['dentadura']) &&
	isset($_POST['otros'])&& !empty ($_POST['otros']) &&
	isset($_POST['observaciones'])&& !empty ($_POST['observaciones']) &&
	isset($_POST['enfermedad_diagnosticada'])&& !empty ($_POST['enfermedad_diagnosticada']) &&
	isset($_POST['enfermedad_importante'])&& !empty ($_POST['enfermedad_importante']) &&
	isset($_POST['medicamento'])&& !empty ($_POST['medicamento']) &&
	isset($_POST['cual'])&& !empty ($_POST['cual'])&&
	isset($_POST['dosis'])&& !empty ($_POST['dosis']) &&
	isset($_POST['desde_cuando'])&& !empty ($_POST['desde_cuando']) &&
	isset($_POST['laxantes'])&& !empty ($_POST['laxantes']) &&
	isset($_POST['diureticos'])&& !empty ($_POST['diureticos']) &&
	isset($_POST['antiacidos'])&& !empty ($_POST['antiacidos']) &&
	isset($_POST['analgesicos'])&& !empty ($_POST['analgesicos']) &&
	isset($_POST['cirugia'])&& !empty ($_POST['cirugia']) &&
	isset($_POST['obesidad'])&& !empty ($_POST['obesidad']) &&
	isset($_POST['diabetis'])&& !empty ($_POST['diabetis']) &&
	isset($_POST['hta'])&& !empty ($_POST['hta']) &&
	isset($_POST['cancer'])&& !empty ($_POST['cancer']) &&
	isset($_POST['hipercolesterolemia'])&& !empty ($_POST['hipercolesterolemia']) &&
	isset($_POST['hipertrigliceridemia'])&& !empty ($_POST['hipertrigliceridemia'])){
	error_reporting(E_ALL ^ E_DEPRECATED); 
	
	$conexion=mysql_connect($host,$user)or die ("problemas con la conexion revisa bien tus variables");

	mysql_select_db($bd,$conexion);
	mysql_query("INSERT INTO antecedentes_salud (diarrea,estrenimiento,gastritis,ulcera,nausea,pirosis,vomito,colitis,dentadura,otros,observaciones,enfermedad_diagnosticada, 	enfermedad_importante,medicamento,cual,dosis,desde_cuando,laxantes,diureticos,antiacidos,analgesicos,cirugia,obesidad,diabetis,hta,cancer, 	hipercolesterolemia,hipertrigliceridemia) VALUES ('$_POST[diarrea]','$_POST[estrenimiento]','$_POST[gastritis]','$_POST[ulcera]','$_POST[nausea]','$_POST[pirosis]','$_POST[vomito]','$_POST[colitis]','$_POST[dentadura]','$_POST[otros]','$_POST[observaciones]','$_POST[enfermedad_diagnosticada]','$_POST[enfermedad_importante]','$_POST[medicamento]','$_POST[cual]','$_POST[dosis]','$_POST[desde_cuando]','$_POST[laxantes]','$_POST[diureticos]','$_POST[antiacidos]','$_POST[analgesicos]','$_POST[cirugia]','$_POST[obesidad]','$_POST[diabetis]','$_POST[hta]','$_POST[cancer]','$_POST[hipercolesterolemia]','$_POST[hipertrigliceridemia]')",$conexion);
	}

	if(isset($_POST['embarazo'])&& !empty ($_POST['embarazo']) &&
	isset($_POST['referido_paciente'])&& !empty ($_POST['referido_paciente']) &&
	isset($_POST['por_fum'])&& !empty ($_POST['por_fum']) &&
	isset($_POST['anticonceptivos_orales'])&& !empty ($_POST['anticonceptivos_orales']) &&
	isset($_POST['cual_anticonceptivo'])&& !empty ($_POST['cual_anticonceptivo']) &&
	isset($_POST['dosis_anticonceptivo'])&& !empty ($_POST['dosis_anticonceptivo']) &&
	isset($_POST['climaterio'])&& !empty ($_POST['climaterio']) &&
	isset($_POST['fecha'])&& !empty ($_POST['fecha']) &&
	isset($_POST['terapia_hormonal'])&& !empty ($_POST['terapia_hormonal']) &&
	isset($_POST['cual_hormonal'])&& !empty ($_POST['cual_hormonal']) &&
	isset($_POST['dosis_hormonal'])&& !empty ($_POST['dosis_hormonal'])){
	error_reporting(E_ALL ^ E_DEPRECATED); 
	
	$conexion=mysql_connect($host,$user)or die ("problemas con la conexion revisa bien tus variables");

	mysql_select_db($bd,$conexion);
	mysql_query("INSERT INTO aspectos_ginecologicos (embarazo,referido_paciente,por_fum,anticonceptivos_orales,cual_anticonceptivo,dosis_anticonceptivo,climaterio,fecha,terapia_hormonal,cual_hormonal,dosis_hormonal) VALUES ('$_POST[embarazo]','$_POST[referido_paciente]','$_POST[por_fum]','$_POST[anticonceptivos_orales]','$_POST[cual_anticonceptivo]','$_POST[dosis_anticonceptivo]','$_POST[climaterio]','$_POST[fecha]','$_POST[terapia_hormonal]','$_POST[cual_hormonal]','$_POST[dosis_hormonal]')",$conexion);



} 

	if(isset($_POST['actividad_desayuno'])&& !empty ($_POST['actividad_desayuno']) &&
	isset($_POST['actividad_comida'])&& !empty ($_POST['actividad_comida']) &&
	isset($_POST['actividad_dormir'])&& !empty ($_POST['actividad_dormir']) &&
	isset($_POST['actictividad_diaria'])&& !empty ($_POST['actictividad_diaria']) &&
	isset($_POST['tipo_ejercicio'])&& !empty ($_POST['tipo_ejercicio']) &&
	isset($_POST['frecuencia_ejercicio'])&& !empty ($_POST['frecuencia_ejercicio']) &&
	isset($_POST['duracion_ejercicio'])&& !empty ($_POST['duracion_ejercicio']) &&
	isset($_POST['inicio_ejercicio'])&& !empty ($_POST['inicio_ejercicio']) &&
	isset($_POST['consumo_alcohol'])&& !empty ($_POST['consumo_alcohol']) &&
	isset($_POST['consumo_tabaco'])&& !empty ($_POST['consumo_tabaco']) &&
	isset($_POST['consumo_cafe'])&& !empty ($_POST['consumo_cafe']) &&
	isset($_POST['aspecto_general'])&& !empty ($_POST['aspecto_general']) &&
	isset($_POST['presion_arterial'])&& !empty ($_POST['presion_arterial']) &&
	isset($_POST['tipo_presion'])&& !empty ($_POST['tipo_presion']) &&
	isset($_POST['hora_registro'])&& !empty ($_POST['hora_registro']) &&
	isset($_POST['brazo_derecho'])&& !empty ($_POST['brazo_derecho'])){
	error_reporting(E_ALL ^ E_DEPRECATED); 
	
	$conexion=mysql_connect($host,$user)or die ("problemas con la conexion revisa bien tus variables");

	mysql_select_db($bd,$conexion);
	mysql_query("INSERT INTO dario_actividades (actividad_desayuno,actividad_comida,actividad_dormir,actictividad_diaria,tipo_ejercicio,frecuencia_ejercicio,duracion_ejercicio,inicio_ejercicio,consumo_alcohol,consumo_tabaco,consumo_cafe,aspecto_general,presion_arterial,tipo_presion,hora_registro,brazo_derecho) VALUES ('$_POST[actividad_desayuno]','$_POST[actividad_comida]','$_POST[actividad_dormir]','$_POST[actictividad_diaria]','$_POST[tipo_ejercicio]','$_POST[frecuencia_ejercicio]','$_POST[duracion_ejercicio]','$_POST[inicio_ejercicio]','$_POST[consumo_alcohol]','$_POST[consumo_tabaco]','$_POST[consumo_cafe]','$_POST[aspecto_general]','$_POST[presion_arterial]','$_POST[tipo_presion]','$_POST[hora_registro]','$_POST[brazo_derecho]')",$conexion);



} 


	if(isset($_POST['bioquimico_relevante'])&& !empty ($_POST['bioquimico_relevante']) &&
	isset($_POST['solicitud_analisis'])&& !empty ($_POST['solicitud_analisis']) &&
	isset($_POST['tipo_analisis'])&& !empty ($_POST['tipo_analisis'])){
	error_reporting(E_ALL ^ E_DEPRECATED); 
	
	$conexion=mysql_connect($host,$user)or die ("problemas con la conexion revisa bien tus variables");

	mysql_select_db($bd,$conexion);
	mysql_query("INSERT INTO bioquimica (bioquimico_relevante,solicitud_analisis,tipo_analisis) VALUES ('$_POST[bioquimico_relevante]','$_POST[solicitud_analisis]','$_POST[tipo_analisis]')",$conexion);

		
}
 	if(isset($_POST['comidas_dia'])&& !empty ($_POST['comidas_dia']) &&
	isset($_POST['comidas_casa'])&& !empty ($_POST['comidas_casa']) &&
	isset($_POST['comidas_fuera'])&& !empty ($_POST['comidas_fuera']) &&
	isset($_POST['horario_comida'])&& !empty ($_POST['horario_comida']) &&
	isset($_POST['prepara_alimento'])&& !empty ($_POST['prepara_alimento']) &&
	isset($_POST['come_entrecomidas'])&& !empty ($_POST['come_entrecomidas']) &&
	isset($_POST['que_come'])&& !empty ($_POST['que_come'])&&
	isset($_POST['modificacion_alimentaria'])&& !empty ($_POST['modificacion_alimentaria']) &&
	isset($_POST['motivo_modificacion'])&& !empty ($_POST['motivo_modificacion']) &&
	isset($_POST['como_modificacion'])&& !empty ($_POST['como_modificacion']) &&
	isset($_POST['apetito_alimentacion'])&& !empty ($_POST['apetito_alimentacion']) &&
	isset($_POST['hora_ambre'])&& !empty ($_POST['hora_ambre'] &&
	isset($_POST['alimento_preferido'])&& !empty ($_POST['alimento_preferido']) &&
	isset($_POST['alimento_nopreferido'])&& !empty ($_POST['alimento_nopreferido']) &&
	isset($_POST['alimento_malestar'])&& !empty ($_POST['alimento_malestar']) &&
	isset($_POST['alergia_alimento'])&& !empty ($_POST['alergia_alimento']) &&
	isset($_POST['suplemento_complemento'])&& !empty ($_POST['suplemento_complemento']) &&
	isset($_POST['cual_suplemento'])&& !empty ($_POST['cual_suplemento']))&&
	isset($_POST['dosis_suplemento'])&& !empty ($_POST['dosis_suplemento']) &&
	isset($_POST['motivo_suplemento'])&& !empty ($_POST['motivo_suplemento']) &&
	isset($_POST['actitud_paciente'])&& !empty ($_POST['actitud_paciente']) &&
	isset($_POST['motivo_actitud'])&& !empty ($_POST['motivo_actitud']) &&
	isset($_POST['sal_comida'])&& !empty ($_POST['sal_comida']) &&
	isset($_POST['grasa_casa'])&& !empty ($_POST['grasa_casa'])&&
	isset($_POST['dieta_especial'])&& !empty ($_POST['dieta_especial']) &&
	isset($_POST['cuantas_dieta'])&& !empty ($_POST['cuantas_dieta']) &&
	isset($_POST['tipo_dieta'])&& !empty ($_POST['tipo_dieta']) &&
	isset($_POST['hace_dieta'])&& !empty ($_POST['hace_dieta']) &&
	isset($_POST['tiempo_dieta'])&& !empty ($_POST['tiempo_dieta']) &&
	isset($_POST['razon_dieta'])&& !empty ($_POST['razon_dieta']) &&
	isset($_POST['apego_dieta'])&& !empty ($_POST['apego_dieta'])&&
	isset($_POST['resultado_dieta'])&& !empty ($_POST['resultado_dieta']) &&
	isset($_POST['medicamentos_peso'])&& !empty ($_POST['medicamentos_peso']) &&
	isset($_POST['cuales_medicamentos'])&& !empty ($_POST['cuales_medicamentos']) &&
	isset($_POST['desayuno_acta'])&& !empty ($_POST['desayuno_acta']) &&
	isset($_POST['colacion_desayuno'])&& !empty ($_POST['colacion_desayuno']) &&
	isset($_POST['comida_acta'])&& !empty ($_POST['comida_acta']) &&
	isset($_POST['colacion_comida'])&& !empty ($_POST['colacion_comida']) &&
	isset($_POST['cena_acta'])&& !empty ($_POST['cena_acta']) &&
	isset($_POST['colacion_cena'])&& !empty ($_POST['colacion_cena']) &&
	isset($_POST['vasos_agua'])&& !empty ($_POST['vasos_agua']) &&
	isset($_POST['vasos_bebida'])&& !empty ($_POST['vasos_bebida']) &&
	isset($_POST['cambios_fin_semana'])&& !empty ($_POST['cambios_fin_semana']) ){
	error_reporting(E_ALL ^ E_DEPRECATED); 
	
	$conexion=mysql_connect($host,$user)or die ("problemas con la conexion revisa bien tus variables");

   mysql_select_db($bd,$conexion);
	mysql_query("INSERT INTO acta_diabetico (comidas_dia,comidas_casa,comidas_fuera,horario_comida,prepara_alimento,come_entrecomidas,que_come,modificacion_alimentaria,motivo_modificacion,como_modificacion,apetito_alimentacion,hora_ambre,alimento_preferido,alimento_nopreferido,alimento_malestar,alergia_alimento,suplemento_complemento,cual_suplemento,dosis_suplemento,motivo_suplemento,actitud_paciente,motivo_actitud,sal_comida,grasa_casa,dieta_especial,cuantas_dieta,tipo_dieta,hace_dieta,tiempo_dieta,razon_dieta,apego_dieta,resultado_dieta,medicamentos_peso,cuales_medicamentos,desayuno_acta,colacion_desayuno,comida_acta,colacion_comida,cena_acta,colacion_cena,vasos_agua,vasos_bebida,cambios_fin_semana) VALUES ('$_POST[comidas_dia]','$_POST[comidas_casa]','$_POST[comidas_fuera]','$_POST[horario_comida]','$_POST[prepara_alimento]','$_POST[come_entrecomidas]','$_POST[que_come]','$_POST[modificacion_alimentaria]','$_POST[motivo_modificacion]','$_POST[como_modificacion]','$_POST[apetito_alimentacion]','$_POST[hora_ambre]','$_POST[alimento_preferido]','$_POST[alimento_nopreferido]','$_POST[alimento_malestar]','$_POST[alergia_alimento]','$_POST[suplemento_complemento]','$_POST[cual_suplemento]','$_POST[dosis_suplemento]','$_POST[motivo_suplemento]','$_POST[actitud_paciente]','$_POST[motivo_actitud]','$_POST[sal_comida]','$_POST[grasa_casa]','$_POST[dieta_especial]','$_POST[cuantas_dieta]','$_POST[tipo_dieta]','$_POST[hace_dieta]','$_POST[tiempo_dieta]','$_POST[razon_dieta]','$_POST[apego_dieta]','$_POST[resultado_dieta]','$_POST[medicamentos_peso]','$_POST[cuales_medicamentos]','$_POST[desayuno_acta]','$_POST[colacion_desayuno]','$_POST[comida_acta]','$_POST[colacion_comida]','$_POST[cena_acta]','$_POST[colacion_cena]','$_POST[vasos_agua]','$_POST[vasos_bebida]','$_POST[cambios_fin_semana]')",$conexion);

echo "<script> alert('Se Agrego Correctamente el Paciente');
		window.location='inicio.php';
		</script>";

	}else{
		echo "<script> alert('Ocurrio un errror en el registro');
		window.location='captura.php';
		</script>";
	}
	

?>

	
	
	

	

	