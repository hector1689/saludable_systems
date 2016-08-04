<?php

session_start();

?>
<!DOCTYPE html>
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


</head>
<body >
    <nav role="navigation" class="nav green">
      <ul>
       <li><a href="inicio.php" title="Inicio">Inicio <i class="icon-home icon-1x"></i></a></li>
      </ul>
    </nav>
	       <article class="row">
        <section class="four fourths  padded bounceInDown animated"><img src="image/fondo_tp.png" alt="">
        <fieldset>
        <legend>Usuario <i class="icon-user icon-1x"></i></legend>
         <div class="one half ">
          <p class="message turquoise"><?php echo "Usuario: Hola " . $_SESSION['usuario'];?>&nbsp;&nbsp;<a href="logout.php" title="Inicio">Cerrar Sesion <i class="icon-signout icon-1x"></i></a></p>  
          </div>
        </fieldset>
          <hr><img src="image/logo_grecia.png" width="200px" height="200px" class="pull-left gap-right">
          <h1>Datos Paciente <i class="icon-apple icon-1x"></i></h1>
          <p>
    
    <div class="tabs ipad">
  <ul role="tablist">
    <li role="tab" aria-controls="#tab1">Datos del Paciente <i class="icon-folder-open icon-1x"></i></li>
    <li role="tab" aria-controls="#tab2">Antecedentes de Salud <i class="icon-folder-open icon-1x"></i></li>
    <li role="tab" aria-controls="#tab3">Aspectos Ginecologicos <i class="icon-folder-open icon-1x"></i></li>
    <li role="tab" aria-controls="#tab4">Diario de Actividades <i class="icon-folder-open icon-1x"></i></li>
    <li role="tab" aria-controls="#tab5">Bioquimica <i class="icon-folder-open icon-1x"></i></li>
    <li role="tab" aria-controls="#tab6">Acta Diabetico <i class="icon-folder-open icon-1x"></i></li>
  </ul>
  <div id="tab1" role="tabpanel">
   <fieldset>
        <legend>Informacion Paciente <i class="icon-book icon-1x"></i></legend>
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet">

        <div class="row">
          <fieldset>
 <form action="paciente.php" method="post">
   <div class="one half padded">
            <label >Nombre Paciente</label>
            <input name="nombre_paciente" type="text" placeholder="Nombre(s) Apellido(s)">
          </div>
          <div class="one half padded">
            <label>Edad del Paciente</label>
            <input name="edad" type="text" placeholder="Edad paciente">
          </div>

            <div class="one half padded">
            <label>Sexo del Paciente</label>
           <select class="unselected" name="sexo">
                <option ></option>
                <option >Masculino</option>
                <option >Femenino</option>
              </select>
          </div>
         <div class="one half padded">
            <label >Fecha de Nacimiento</label>
            <input type="text" name="fecha_nacimiento"  placeholder="Fecha de Nacimiento paciente">
          </div>

           <div class="one half padded">
            <label >Estado Civil</label>
             <select class="unselected" name="estado_civil">
                <option ></option>
                <option >Soltero</option>
                <option >Casado</option>
                <option >Divorciado</option>
                <option >Viudo</option>
              </select>
          </div>
          <div class="one half padded">
            <label >Escolaridad del Paciente</label>
            <select class="unselected" name="escolaridad">
                <option ></option>
                <option >Primaria</option>
                <option >Secundaria</option>
                <option >Tecnica</option>
                <option >Preparatoria</option>
                <option >Universidad</option>
                <option >Maestria</option>
                <option >Doctorado</option>
              </select>
          </div>

            <div class="one half padded">
            <label >Ocupacion Paciente</label>
            <select class="unselected" name="ocupacion">
                <option ></option>
                <option >Obrero</option>
                <option >Tecnico</option>
                <option >Maestro</option>
                <option >Doctor</option>
                <option >Ingeniero</option>
                <option >Licenciado</option>
                <option >Otro</option>
              </select>
          </div>
          <div class="one half padded">
            <label >Direccion</label>
            <input name="direccion" type="text" placeholder="Direccion del paciente">
          </div>

          <div class="one half padded">
            <label >Telefono Paciente</label>
            <input name="telefono" type="text" placeholder="Telefono Paciente">
          </div>
          <div class="one half padded">
            <label >Email Paciente</label>
            <input name="email" type="text" placeholder="Email paciente">
          </div>

          <div class="one half padded">
            <label>Tipo de Consulta</label>
            <input name="motivo_consulta" type="text" placeholder="Tipo de Consulta">
          </div>
            <div class="one half padded">
            <label >Fecha de Elaboracion</label>
            <input  type="text" name="fecha_elaboracion"   value="<?php echo date("Y-m-d") ?>">
          </div>
         
        </fieldset>
        </div></p>
  </div>
  <div id="tab2" role="tabpanel">
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet"> <div class="row">
          <fieldset>

             <div class="one half padded">
            <label for="name">Diarrea</label>
             <select class="unselected" name="diarrea">
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">Estreñimiento</label>
             <select class="unselected" name="estrenimiento">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

               <div class="one half padded">
            <label for="name">gastritis</label>
             <select class="unselected" name="gastritis">
                <option></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">ulcera</label>
             <select class="unselected" name="ulcera">
                <option ></option>
                <option >Si</option>
                <option>NO</option>
              </select>
          </div>

                 <div class="one half padded">
            <label for="name">nausea</label>
             <select class="unselected" name="nausea">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">pirosis</label>
             <select class="unselected" name="pirosis">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

                  <div class="one half padded">
            <label for="name">vomito</label>
             <select class="unselected" name="vomito">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">colitis</label>
             <select class="unselected" name="colitis">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">dentadura</label>
            <input type="text" name="dentadura" placeholder="Dentadura Paciente">
          </div>
          <div class="one half padded">
            <label for="email">otros</label>
             <input type="text" name="otros" placeholder="Otros Paciente">
          </div>

          <div class="one half padded">
            <label for="name">Observaciones</label>
            <textarea name="observaciones" placeholder="Enter your message..."></textarea>
          </div>
          <div class="one half padded">
            <label for="email">enfermedad diagnosticada</label>
             <select class="unselected" name="enfermedad_diagnosticada">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

                 <div class="one half padded">
            <label for="name">Enfermedad Importante</label>
             <select class="unselected" name="enfermedad_importante">
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">medicamento</label>
             <select class="unselected" name="medicamento">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Cual </label>
             <input type="text" name="cual" placeholder="Cual medicamento">
          </div>
          <div class="one half padded">
            <label for="email">Dosis</label>
             <input  type="text" name="dosis" placeholder="Telefono Paciente">
          </div>

            <div class="one half padded">
            <label for="name">Desde Cuando </label>
             <input type="text" name="desde_cuando" placeholder="desde cuando">
          </div>
          <div class="one half padded">
            <label for="name">Laxantes</label>
             <select class="unselected" name="laxantes">
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">diureticos</label>
             <select class="unselected" name="diureticos">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">antiacidos</label>
             <select class="unselected" name="antiacidos">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">analgesicos</label>
             <select class="unselected" name="analgesicos">
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">cirugia</label>
             <select class="unselected" name="cirugia">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">obesidad</label>
             <select class="unselected" name="obesidad">
                <option ></option>
                <option>Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">diabetis</label>
             <select class="unselected" name="diabetis">
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">hta</label>
             <select class="unselected" name="hta">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">cancer</label>
             <select class="unselected" name="cancer">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">hipercolesterolemia</label>
             <select class="unselected" name="hipercolesterolemia">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">hipertrigliceridemia</label>
             <select class="unselected" name="hipertrigliceridemia">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
         
        </fieldset>
        </div></p>
  </div>
<div id="tab3" role="tabpanel">
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet"><div class="row">
          <fieldset>

         <div class="one half padded">
            <label for="name">Embarazo</label>
             <select class="unselected" name="embarazo">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">referido_paciente</label>
              <input type="text" name="referido_paciente" placeholder="Fecha de Nacimiento paciente">
          </div>

             <div class="one half padded">
            <label for="name">por fum</label>
             <select class="unselected" name="por_fum">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">anticonceptivos orales</label>
             <select class="unselected" name="anticonceptivos_orales">
                <option></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Cual anticonceptivo</label>
             <input  type="text" name="cual_anticonceptivo" placeholder="cual anticonceptivo">
          </div>
            <div class="one half padded">
            <label for="name">Dosis</label>
              <input type="text" name="dosis_anticonceptivo" placeholder="dosis">
          </div>

            <div class="one half padded">
            <label for="name">Climaterio</label>
             <input type="text" name="climaterio" placeholder="Climaterio">
          </div>
            <div class="one half padded">
            <label for="name">Fecha</label>
              <input type="text" name="fecha" placeholder="Fecha ">
          </div>

          <div class="one half padded">
            <label for="name">Terapia Hormonal</label>
             <select class="unselected" name="terapia_hormonal">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">Cual hormonal</label>
              <input type="text" name="cual_hormonal" placeholder="Cual hormonal">
          </div>

          <div class="one half padded">
            <label for="email">Dosis Hormonal</label>
            <input  type="text" name="dosis_hormonal" placeholder="Dosis hormonal">
          </div>
         
        </fieldset>
        </div></p>
  </div>
  <div id="tab4" role="tabpanel">
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet"><div class="row">
          <fieldset>

          <div class="one half padded">
            <label for="name">Desayuno</label>
            <textarea  name="actividad_desayuno" placeholder="Enter your message..."></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Comida</label>
             <textarea name="actividad_comida" placeholder="Enter your message..."></textarea>
          </div>

            <div class="one half padded">
            <label for="name">Actividad Dormir</label>
            <textarea name="actividad_dormir" placeholder="Enter your message..."></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Actividad Diaria</label>
             <textarea name="actictividad_diaria" placeholder="Enter your message..."></textarea>
          </div>


           <div class="one half padded">
            <label for="name">Tipo de Ejercicio</label>
             <select class="unselected" name="tipo_ejercicio">
                <option ></option>
                <option >Soltero</option>
                <option >Casado</option>
                <option >Divorciado</option>
                <option >Viudo</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Frecuencia de Ejercicio</label>
             <input  type="text" name="frecuencia_ejercicio" placeholder="Direccion del paciente">
          </div>

            <div class="one half padded">
            <label for="name">Duracion de Ejercicio</label>
            <input type="text" name="duracion_ejercicio" placeholder="Direccion del paciente">
          </div>
          <div class="one half padded">
            <label for="email">Inicio del Ejercicio</label>
            <input  type="text" name="inicio_ejercicio" placeholder="Direccion del paciente">
          </div>

           <div class="one half padded">
            <label for="name">consume alcohol</label>
             <select class="unselected" name="consumo_alcohol">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">consume tabaco</label>
                <select class="unselected" name="consumo_tabaco">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">consume cafe</label>
              <select class="unselected" name="consumo_cafe">
                <option ></option>
                <option>Si</option>
                <option >No</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">Aspecto General</label>
              <input  type="text" name="aspecto_general" placeholder="Direccion del paciente">
          </div>


            <div class="one half padded">
            <label for="name">Presion Arterial</label>
              <input type="text" name="presion_arterial" placeholder="Direccion del paciente">
          </div>
             <div class="one half padded">
            <label for="name">Tipo de Presion Arterial</label>
              <select class="unselected" name="tipo_presion">
                <option ></option>
                <option >Alta</option>
                <option >Media</option>
                 <option >Baja</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Hora de Registro</label>
            <input  type="text" name="hora_registro" placeholder="Direccion del paciente">
          </div>
          <div class="one half padded">
            <label for="email">Brazo Derecho</label>
            <input type="text" name="brazo_derecho" placeholder="Direccion del paciente">
          </div>
         
        </fieldset>
        </div></p>
  </div>
  <div id="tab5" role="tabpanel">
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet"> 
        <div class="row">
          <fieldset>

          <div class="one half padded">
            <label for="name">Bioquimica Relevante</label>
            <input  type="text"  name="bioquimico_relevante" placeholder="Bioquimica Relevante">
          </div>
          <div class="one half padded">
            <label for="email">Solicitud de Analisis</label>
            <select class="unselected" name="solicitud_analisis">
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">Tipo de Analisis</label>
            <select class="unselected" name="tipo_analisis">
                <option ></option>
                <option >Masculino</option>
                <option >Femenino</option>
                <option >Masculino</option>
                <option >Femenino</option>
              </select>
          </div>
          
         
        </fieldset>
        </div></p>
</div>
<div id="tab6" role="tabpanel">
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet">  <div class="row">
          <fieldset>

         <div class="one half padded">
            <label for="name">Comidas al Dia</label>
             <select class="unselected" name="comidas_dia" >
                <option ></option>
                <option >1</option>
                <option >2</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Comidas en Casa</label>
             <select class="unselected" name="comidas_casa" >
                <option ></option>
                <option >1</option>
                <option >2</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">Comidas Fuera</label>
            <select class="unselected" name="comidas_fuera" >
                <option ></option>
                <option >1</option>
                <option >2</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Horario de Comida</label>
            <input  type="text" name="horario_comida" placeholder="Horario de Comida">
          </div>

           <div class="one half padded">
            <label for="name">Prepara Alimento</label>
             <select class="unselected" name="prepara_alimento" >
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Come entre Comidas</label>
             <select class="unselected" name="come_entrecomidas" >
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">Que come</label>
           <input  type="text" name="que_come" placeholder="Que come el paciente">
          </div>
          <div class="one half padded">
            <label for="email">Modificacion Alimentaria</label>
           <select class="unselected" name="modificacion_alimentaria">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">Motivo Modificacion</label>
            <input type="text" name="motivo_modificacion" placeholder="Motivo modificacion alimentaria del Paciente">
          </div>
          <div class="one half padded">
            <label for="email">Como Modifico </label>
            <input type="text" name="como_modificacion" placeholder="Como Modifico">
          </div>

          <div class="one half padded">
            <label for="name">Apetito Alimentario</label>
            <select class="unselected" name="apetito_alimentacion">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Hora que le da hambre</label>
            <input  type="text"  name="hora_ambre" placeholder="Hora que le da hambre">
          </div>

          <div class="one half padded">
            <label for="name">Alimento preferido</label>
            <input  type="text" name="alimento_preferido" placeholder="Alimento preferido">
          </div>
          <div class="one half padded">
            <label for="email">Alimento no preferido</label>
            <input  type="text" name="alimento_nopreferido" placeholder="Alimento no preferido">
          </div>

          <div class="one half padded">
            <label for="name">Alimento da malestar paciente</label>
            <input  type="text" name="alimento_malestar" placeholder="Alimento da malestar paciente">
          </div>
          <div class="one half padded">
            <label for="email">Alergia de algun alimento</label>
            <input  type="text" name="alergia_alimento" placeholder="Alergia de algun alimento">
          </div>

           <div class="one half padded">
            <label for="name">Suplemento que Complementa</label>
            <input type="text" name="suplemento_complemento" placeholder="Suplemento que Complementa">
          </div>
          <div class="one half padded">
            <label for="email">Cual suplemento</label>
            <input type="text" name="cual_suplemento" placeholder="Cual suplemento">
          </div>

           <div class="one half padded">
            <label for="name">Dosis suplemento</label>
            <input type="text" name="dosis_suplemento" placeholder="Dosis suplemento">
          </div>
          <div class="one half padded">
            <label for="email">Motivo del suplemento</label>
            <input type="text" name="motivo_suplemento" placeholder="Motivo del suplemento">
          </div>

           <div class="one half padded">
            <label for="name">Actitud del paciente</label>
            <input  type="text" name="actitud_paciente" placeholder="Actitud del paciente">
          </div>
          <div class="one half padded">
            <label for="email">Motivo de su actitud</label>
            <input type="text" name="motivo_actitud" placeholder="Motivo de su actitud">
          </div>

          <div class="one half padded">
            <label for="name">Sal a su comida</label>
             <select class="unselected" name="sal_comida">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Grasa en casa</label>
            <select class="unselected" name="grasa_casa">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">Dieta especial</label>
            <select class="unselected" name="dieta_especial">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Cuantas dietas</label>
            <input type="text" name="cuantas_dieta" placeholder="Cuantas dietas">
          </div>

          <div class="one half padded">
            <label for="name">Tipo de Dieta</label>
            <input type="text" name="tipo_dieta" placeholder="Tipo de Dieta">
          </div>
          <div class="one half padded">
            <label for="email">Hace dieta</label>
            <select class="unselected" name="hace_dieta">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">Tiempo de Dieta</label>
            <input type="text"  name="tiempo_dieta" placeholder="Tiempo de Dieta">
          </div>


          <div class="one half padded">
            <label for="name">Razon de la dieta</label>
            <input type="text" name="razon_dieta" placeholder="Razon de la dieta">
          </div>
          <div class="one half padded">
            <label for="email">Se apega a la dieta</label>
            <select class="unselected" name="apego_dieta">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

    <div class="one half padded">
            <label for="name">Resultado de la Dieta</label>
            <input  type="text" name="resultado_dieta" placeholder="Resultado de la Dieta">
          </div>
          <div class="one half padded">
            <label for="email">Medicamentos</label>
            <input type="text" name="medicamentos_peso" placeholder="Medicamentos">
          </div>

          <div class="one half padded">
            <label for="name">Cuales medicamentos</label>
            <input  type="text" name="cuales_medicamentos" placeholder="Cuales medicamentos">
          </div>
          <div class="one half padded">
            <label for="email">Desayuno</label>
           <textarea name="desayuno_acta" placeholder="Enter your message..."></textarea>
          </div>
         
         <div class="one half padded">
            <label for="name">Colacion desayuno</label>
           <textarea name="colacion_desayuno" placeholder="Enter your message..."></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Comida</label>
            <textarea name="comida_acta" placeholder="Enter your message..."></textarea>
          </div>

         <div class="one half padded">
            <label for="name">Colacion comida</label>
          <textarea name="colacion_comida" placeholder="Enter your message..."></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Cena</label>
           <textarea name="cena_acta" placeholder="Enter your message..."></textarea>
          </div>

           <div class="one half padded">
            <label for="name">Colacion cena</label>
          <textarea name="colacion_cena" placeholder="Enter your message..."></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Vaso de agua</label>
            <select class="unselected" name="vasos_agua">
                <option  ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Vaso de bebida</label>
           <select class="unselected" name="vasos_bebida">
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Cambios en el fin de semana</label>
           <textarea name="cambios_fin_semana" placeholder="Enter your message..."></textarea>
          </div>

        </fieldset>
        </div>
        <br><br>
        <button type="submit" class="green button">Guardar Datos <i class="icon-save icon-1x"></i></button>
      </fieldset>
    </form></p>
</div>


         </p>
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



  


      