
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
 <form action="includes/paciente.php" method="post" class="cmxform" id="commentForm">
   <div class="one half padded">
            <label for="cname" >Nombre Paciente</label>
            <input name="nombre_paciente" type="text"  id="cname" placeholder="Nombre(s) Apellido(s)" required>
          </div>
          <div class="one half padded">
            <label>Edad del Paciente</label>
            <input name="edad" type="text" id="cname" placeholder="Edad paciente" required>
          </div>

            <div class="one half padded">
            <label for="cname">Sexo del Paciente</label>
           <select class="unselected" id="cname" name="sexo" required>
                <option ></option>
                <option >Masculino</option>
                <option >Femenino</option>
              </select>
          </div>
         <div class="one half padded">
            <label for="cname" >Fecha de Nacimiento</label>
            <input type="text" name="fecha_nacimiento" id="cname"  placeholder="Fecha de Nacimiento paciente" required>
          </div>

           <div class="one half padded">
            <label for="cname">Estado Civil</label>
             <select class="unselected" id="cname" name="estado_civil" required>
                <option ></option>
                <option >Soltero</option>
                <option >Casado</option>
                <option >Divorciado</option>
                <option >Viudo</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="cname">Escolaridad del Paciente</label>
            <select class="unselected" id="cname" name="escolaridad" required>
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
            <label for="cname">Ocupacion Paciente</label>
            <select class="unselected" id="cname" name="ocupacion" required>
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
            <label for="cname">Direccion</label>
            <input name="direccion" type="text" id="cname" placeholder="Direccion del paciente" required>
          </div>

          <div class="one half padded">
            <label for="cname">Telefono Paciente</label>
            <input name="telefono" type="text" id="cname" placeholder="Telefono Paciente" required>
          </div>
          <div class="one half padded">
            <label for="cname">Email Paciente</label>
            <input name="email" type="text" id="cemail" placeholder="Email paciente" required>
          </div>

          <div class="one half padded">
            <label for="cname">Tipo de Consulta</label>
            <input name="motivo_consulta" type="text" id="cname" placeholder="Tipo de Consulta" required>
          </div>
            <div class="one half padded">
            <label >Fecha de Elaboracion</label>
            <input  type="text" name="fecha_elaboracion" id="cname" disabled="disabled" value="<?php echo date("Y-m-d") ?>" required>
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
             <select class="unselected" id="cname" name="diarrea" required>
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">Estreñimiento</label>
             <select class="unselected" id="cname" name="estrenimiento" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

               <div class="one half padded">
            <label for="name">gastritis</label>
             <select class="unselected" id="cname" name="gastritis" required>
                <option></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">ulcera</label>
             <select class="unselected" id="cname" name="ulcera" required>
                <option ></option>
                <option >Si</option>
                <option>NO</option>
              </select>
          </div>

                 <div class="one half padded">
            <label for="name">nausea</label>
             <select class="unselected" id="cname" name="nausea" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">pirosis</label>
             <select class="unselected" id="cname" name="pirosis" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

                  <div class="one half padded">
            <label for="name">vomito</label>
             <select class="unselected" id="cname" name="vomito" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">colitis</label>
             <select class="unselected" id="cname" name="colitis" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">dentadura</label>
            <input type="text" name="dentadura" id="cname" placeholder="Dentadura Paciente" required>
          </div>
          <div class="one half padded">
            <label for="email">otros</label>
             <input type="text" name="otros" id="cname" placeholder="Otros Paciente" required>
          </div>

          <div class="one half padded">
            <label for="name">Observaciones</label>
            <textarea name="observaciones" id="cname" placeholder="Observaciones" required></textarea>
          </div>
          <div class="one half padded">
            <label for="email">enfermedad diagnosticada</label>
             <select class="unselected" id="cname" name="enfermedad_diagnosticada" placeholder="enfermedad diagnosticada" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

                 <div class="one half padded">
            <label for="name">Enfermedad Importante</label>
             <select class="unselected" id="cname" name="enfermedad_importante"  placeholder="enfermedad importante" required>
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">medicamento</label>
             <select class="unselected" id="cname" name="medicamento" placeholder="Medicamento" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Cual </label>
             <input type="text" name="cual" id="cname"  placeholder="Cual medicamento" required>
          </div>
          <div class="one half padded">
            <label for="email">Dosis</label>
             <input  type="text" name="dosis" id="cname" placeholder="Telefono Paciente" required>
          </div>

            <div class="one half padded">
            <label for="name">Desde Cuando </label>
             <input type="text" name="desde_cuando" id="cname" placeholder="desde cuando" required>
          </div>
          <div class="one half padded">
            <label for="name">Laxantes</label>
             <select class="unselected" id="cname" name="laxantes" required>
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">diureticos</label>
             <select class="unselected" id="cname" name="diureticos" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">antiacidos</label>
             <select class="unselected" id="cname" name="antiacidos" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">analgesicos</label>
             <select class="unselected"  id="cname" name="analgesicos" required>
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">cirugia</label>
             <select class="unselected" id="cname" name="cirugia" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">obesidad</label>
             <select class="unselected" id="cname" name="obesidad" required>
                <option ></option>
                <option>Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">diabetis</label>
             <select class="unselected" id="cname" name="diabetis" required>
                <option  ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">hta</label>
             <select class="unselected" id="cname" name="hta" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">cancer</label>
             <select class="unselected" id="cname" name="cancer" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">hipercolesterolemia</label>
             <select class="unselected" id="cname" name="hipercolesterolemia" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">hipertrigliceridemia</label>
             <select class="unselected" id="cname" name="hipertrigliceridemia" required>
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
             <select class="unselected" id="cname" name="embarazo" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">referido_paciente</label>
              <input type="text" name="referido_paciente"  id="cname" placeholder="Fecha de Nacimiento paciente" required>
          </div>

             <div class="one half padded">
            <label for="name">por fum</label>
             <select class="unselected" id="cname" name="por_fum" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">anticonceptivos orales</label>
             <select class="unselected" id="cname" name="anticonceptivos_orales" required>
                <option></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Cual anticonceptivo</label>
             <input  type="text" name="cual_anticonceptivo" id="cname" placeholder="cual anticonceptivo" required>
          </div>
            <div class="one half padded">
            <label for="name">Dosis</label>
              <input type="text" name="dosis_anticonceptivo"  id="cname" placeholder="dosis" required>
          </div>

            <div class="one half padded">
            <label for="name">Climaterio</label>
             <input type="text" name="climaterio"  id="cname" placeholder="Climaterio" required>
          </div>
            <div class="one half padded">
            <label for="name">Fecha</label>
              <input type="text" name="fecha" id="cname" placeholder="Fecha " required>
          </div>

          <div class="one half padded">
            <label for="name">Terapia Hormonal</label>
             <select class="unselected" id="cname" name="terapia_hormonal" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">Cual hormonal</label>
              <input type="text" name="cual_hormonal" id="cname" placeholder="Cual hormonal" required>
          </div>

          <div class="one half padded">
            <label for="email">Dosis Hormonal</label>
            <input  type="text" name="dosis_hormonal" id="cname" placeholder="Dosis hormonal" required>
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
            <textarea  name="actividad_desayuno" id="cname" placeholder="Desayuno" required></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Comida</label>
             <textarea name="actividad_comida" id="cname" placeholder="Comida" required></textarea>
          </div>

            <div class="one half padded">
            <label for="name">Actividad Dormir</label>
            <textarea name="actividad_dormir" id="cname" placeholder="Actividad dormir" required></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Actividad Diaria</label>
             <textarea name="actictividad_diaria" id="cname" placeholder="Actividad diaria" required></textarea>
          </div>


           <div class="one half padded">
            <label for="name">Tipo de Ejercicio</label>
             <select class="unselected" id="cname" name="tipo_ejercicio" required>
                <option ></option>
                <option >Soltero</option>
                <option >Casado</option>
                <option >Divorciado</option>
                <option >Viudo</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Frecuencia de Ejercicio</label>
             <input  type="text" name="frecuencia_ejercicio" id="cname" placeholder="Frecuancia ejercicio" required>
          </div>

            <div class="one half padded">
            <label for="name">Duracion de Ejercicio</label>
            <input type="text" name="duracion_ejercicio" id="cname" placeholder="Duracion de ejercicio" required>
          </div>
          <div class="one half padded">
            <label for="email">Inicio del Ejercicio</label>
            <input  type="text" name="inicio_ejercicio" id="cname" placeholder="Inicio de ejercicio" required>
          </div>

           <div class="one half padded">
            <label for="name">consume alcohol</label>
             <select class="unselected" id="cname" name="consumo_alcohol" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">consume tabaco</label>
                <select class="unselected" id="cname" name="consumo_tabaco" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">consume cafe</label>
              <select class="unselected" id="cname" name="consumo_cafe" required>
                <option ></option>
                <option>Si</option>
                <option >No</option>
              </select>
          </div>
            <div class="one half padded">
            <label for="name">Aspecto General</label>
              <input  type="text" name="aspecto_general" id="cname" placeholder="Aspecto General" required>
          </div>


            <div class="one half padded">
            <label for="name">Presion Arterial</label>
              <input type="text" name="presion_arterial" id="cname" placeholder="Presion arterial" required>
          </div>
             <div class="one half padded">
            <label for="name">Tipo de Presion Arterial</label>
              <select class="unselected" id="cname" name="tipo_presion" required>
                <option ></option>
                <option >Alta</option>
                <option >Media</option>
                 <option >Baja</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Hora de Registro</label>
            <input  type="text" name="hora_registro" id="cname" placeholder="Hora de registro" required>
          </div>
          <div class="one half padded">
            <label for="email">Brazo Derecho</label>
            <input type="text" name="brazo_derecho" id="cname" placeholder="Brazo derecho" required>
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
            <input  type="text"  name="bioquimico_relevante" id="cname" placeholder="Bioquimica Relevante" required>
          </div>
          <div class="one half padded">
            <label for="email">Solicitud de Analisis</label>
            <select class="unselected" id="cname" name="solicitud_analisis" required>
                <option ></option>
                <option >Si</option>
                <option >NO</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">Tipo de Analisis</label>
            <select class="unselected" id="cname" name="tipo_analisis" required>
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
             <select class="unselected" id="cname" name="comidas_dia" required>
                <option ></option>
                <option >1</option>
                <option >2</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Comidas en Casa</label>
             <select class="unselected" id="cname" name="comidas_casa" required>
                <option ></option>
                <option >1</option>
                <option >2</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">Comidas Fuera</label>
            <select class="unselected" id="cname" name="comidas_fuera" required>
                <option ></option>
                <option >1</option>
                <option >2</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Horario de Comida</label>
            <input  type="text" name="horario_comida" id="cname" placeholder="Horario de Comida" required>
          </div>

           <div class="one half padded">
            <label for="name">Prepara Alimento</label>
             <select class="unselected" id="cname" name="prepara_alimento" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Come entre Comidas</label>
             <select class="unselected" id="cname" name="come_entrecomidas" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

            <div class="one half padded">
            <label for="name">Que come</label>
           <input  type="text" name="que_come" id="cname" placeholder="Que come el paciente" required>
          </div>
          <div class="one half padded">
            <label for="email">Modificacion Alimentaria</label>
           <select class="unselected" id="cname" name="modificacion_alimentaria" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">Motivo Modificacion</label>
            <input type="text" name="motivo_modificacion" id="cname" placeholder="Motivo modificacion alimentaria del Paciente" required>
          </div>
          <div class="one half padded">
            <label for="email">Como Modifico </label>
            <input type="text" name="como_modificacion" id="cname" placeholder="Como Modifico" required>
          </div>

          <div class="one half padded">
            <label for="name">Apetito Alimentario</label>
            <select class="unselected" id="cname" name="apetito_alimentacion" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Hora que le da hambre</label>
            <input  type="text"  name="hora_ambre" id="cname" placeholder="Hora que le da hambre" required>
          </div>

          <div class="one half padded">
            <label for="name">Alimento preferido</label>
            <input  type="text" name="alimento_preferido" id="cname" placeholder="Alimento preferido" required>
          </div>
          <div class="one half padded">
            <label for="email">Alimento no preferido</label>
            <input  type="text" name="alimento_nopreferido" id="cname" placeholder="Alimento no preferido" required>
          </div>

          <div class="one half padded">
            <label for="name">Alimento da malestar paciente</label>
            <input  type="text" name="alimento_malestar" id="cname" placeholder="Alimento da malestar paciente" required>
          </div>
          <div class="one half padded">
            <label for="email">Alergia de algun alimento</label>
            <input  type="text" name="alergia_alimento" id="cname" placeholder="Alergia de algun alimento" required>
          </div>

           <div class="one half padded">
            <label for="name">Suplemento que Complementa</label>
            <input type="text" name="suplemento_complemento" id="cname" placeholder="Suplemento que Complementa" required>
          </div>
          <div class="one half padded">
            <label for="email">Cual suplemento</label>
            <input type="text" name="cual_suplemento" id="cname" placeholder="Cual suplemento" required>
          </div>

           <div class="one half padded">
            <label for="name">Dosis suplemento</label>
            <input type="text" name="dosis_suplemento" id="cname" placeholder="Dosis suplemento" required>
          </div>
          <div class="one half padded">
            <label for="email">Motivo del suplemento</label>
            <input type="text" name="motivo_suplemento" id="cname" placeholder="Motivo del suplemento" required>
          </div>

           <div class="one half padded">
            <label for="name">Actitud del paciente</label>
            <input  type="text" name="actitud_paciente" id="cname" placeholder="Actitud del paciente" required>
          </div>
          <div class="one half padded">
            <label for="email">Motivo de su actitud</label>
            <input type="text" name="motivo_actitud" id="cname" placeholder="Motivo de su actitud" required>
          </div>

          <div class="one half padded">
            <label for="name">Sal a su comida</label>
             <select class="unselected" id="cname" name="sal_comida" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Grasa en casa</label>
            <select class="unselected" id="cname" name="grasa_casa" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">Dieta especial</label>
            <select class="unselected" id="cname" name="dieta_especial" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Cuantas dietas</label>
            <input type="text" name="cuantas_dieta" id="cname" placeholder="Cuantas dietas" required>
          </div>

          <div class="one half padded">
            <label for="name">Tipo de Dieta</label>
            <input type="text" name="tipo_dieta" id="cname" placeholder="Tipo de Dieta" required>
          </div>
          <div class="one half padded">
            <label for="email">Hace dieta</label>
            <select class="unselected" id="cname" name="hace_dieta" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

          <div class="one half padded">
            <label for="name">Tiempo de Dieta</label>
            <input type="text"  name="tiempo_dieta" id="cname" placeholder="Tiempo de Dieta" required>
          </div>


          <div class="one half padded">
            <label for="name">Razon de la dieta</label>
            <input type="text" name="razon_dieta" id="cname" placeholder="Razon de la dieta" required>
          </div>
          <div class="one half padded">
            <label for="email">Se apega a la dieta</label>
            <select class="unselected" id="cname" name="apego_dieta" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

    <div class="one half padded">
            <label for="name">Resultado de la Dieta</label>
            <input  type="text" name="resultado_dieta" id="cname" placeholder="Resultado de la Dieta" required>
          </div>
          <div class="one half padded">
            <label for="email">Medicamentos</label>
            <input type="text" name="medicamentos_peso" id="cname" placeholder="Medicamentos" required>
          </div>

          <div class="one half padded">
            <label for="name">Cuales medicamentos</label>
            <input  type="text" name="cuales_medicamentos" id="cname" placeholder="Cuales medicamentos" required>
          </div>
          <div class="one half padded">
            <label for="email">Desayuno</label>
           <textarea name="desayuno_acta" id="cname" placeholder="Desayuno" required></textarea>
          </div>
         
         <div class="one half padded">
            <label for="name">Colacion desayuno</label>
           <textarea name="colacion_desayuno" id="cname" placeholder="Colacion desayuno" required></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Comida</label>
            <textarea name="comida_acta" id="cname" placeholder="Comida" required></textarea>
          </div>

         <div class="one half padded">
            <label for="name">Colacion comida</label>
          <textarea name="colacion_comida" id="cname" placeholder="Colacion comida" required></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Cena</label>
           <textarea name="cena_acta" id="cname" placeholder="Cena" required></textarea>
          </div>

           <div class="one half padded">
            <label for="name">Colacion cena</label>
          <textarea name="colacion_cena" id="cname" placeholder="Colacion cena" required></textarea>
          </div>
          <div class="one half padded">
            <label for="email">Vaso de agua</label>
            <select class="unselected" id="cname" name="vasos_agua" required>
                <option  ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>

           <div class="one half padded">
            <label for="name">Vaso de bebida</label>
           <select class="unselected" id="cname" name="vasos_bebida" required>
                <option ></option>
                <option >Si</option>
                <option >No</option>
              </select>
          </div>
          <div class="one half padded">
            <label for="email">Cambios en el fin de semana</label>
           <textarea name="cambios_fin_semana" id="cname" placeholder="Cambios en el fin de semana" required></textarea>
          </div>

        </fieldset>
        </div>
        <br><br>
        <button type="submit"   class="green button submit">Guardar Datos <i class="icon-save icon-1x"></i></button>
      </fieldset>
    </form></p>
</div>
<script>
$("#commentForm").validate();
</script>