<?php 
include("includes/email_paciente.php"); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include('models/head.php'); ?>
</head>
<body >
<?php include('models/nav.php'); ?>

         <article class="row">
        <section class="four fourths  padded bounceInDown animated">
        <?php include("models/header_img.php"); ?>
        
          <hr>

          <img src="image/logo_grecia.png" width="200px" height="200px" class="pull-left gap-right">
          <h1>Email para el Paciente <i class="icon-envelope-alt icon-1x"></i></h1>
          <p>

   <fieldset>
        <legend>Informacion Paciente <i class="icon-book icon-1x"></i></legend>
    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>
    <p class="gap-top-small-tablet">

        <div class="row">
           <form action="mail.php" method="post" class="cmxform" id="commentForm">

        <div class="one half padded">
          <label >Nombre Paciente</label>
          <input name="nombre" type="text" placeholder="Nombre(s) Apellido(s)" value="<?php echo $rsEmp["nombre_paciente"]; ?>"">
        </div>

        <div class="one half padded">
          <label >Email Paciente</label>
          <input name="correo" type="text" value="<?php echo $rsEmp["email"]; ?>" placeholder="Email paciente">
        </div>

        <div class="one half padded">
          <label >Subject</label>
          <input name="subject" type="text"  placeholder="Asunto del mensaje">
        </div>

         <div class="row">
              <div class="one whole padded">
                <div class="tabs vertical ipad">
                  <ul role="tablist">
                    <li role="tab" aria-controls="#tab1">Lunes</li>
                    <li role="tab" aria-controls="#tab2">Martes</li>
                    <li role="tab" aria-controls="#tab3">Miercoles</li>
                    <li role="tab" aria-controls="#tab4">Jueves</li>
                    <li role="tab" aria-controls="#tab5">Viernes</li>
                    <li role="tab" aria-controls="#tab6">Sabado</li>
                    <li role="tab" aria-controls="#tab7">Domingo</li>
                  </ul>
                  <div id="tab1" role="tabpanel">
                    <h1>MENU <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#f1c40f;">Lunes</span></h1>
                    <div class="pull-right pull-none-small-tablet gap-left no-gap-small-tablet align-center"></div>

                      <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_lunes"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_lunes"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_lunes"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_lunes"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_lunes"  placeholder="Cena"  required></textarea>
                      </div>

                  </div>
                  <div id="tab2" role="tabpanel">
                    <h1>Menu <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#e67e22;">Martes</span></h1>


                       <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_martes"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_martes"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_martes"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_martes"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_martes"   placeholder="Cena" required></textarea>
                      </div>
                  </div>
                  <div id="tab3" role="tabpanel">
                    <h1>Menu <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#e74c3c;">Miercoles</span></h1>

                    
                       <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_miercoles"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_miercoles"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_miercoles"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_miercoles"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_miercoles"  placeholder="Cena" required></textarea>
                      </div>

                  </div>
                  <div id="tab4" role="tabpanel">
                    <h1>Menu <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#f02475;">Jueves</span></h1>


                      <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_jueves"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_jueves"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_jueves"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_jueves"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_jueves"  placeholder="Cena" required></textarea>
                      </div>

                  </div>
                  <div id="tab5" role="tabpanel">
                    <h1>Menu <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#9b59b6;">Viernes</span></h1>


                       <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_viernes"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_viernes"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_viernes"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_viernes" placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_viernes"  placeholder="Cena" required></textarea>
                      </div>

                  </div>
                  <div id="tab6" role="tabpanel">
                    <h1>Menu <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#383636;">Sabado</span></h1>

                       <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_sabado"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_sabado"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_sabado"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_sabado"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_sabado"  placeholder="Cena" required></textarea>
                      </div>

                  </div>
                  <div id="tab7" role="tabpanel">
                    <h1>Menu <span style="display:inline-block;padding:0 0.3em;border-radius:4px;color:#fff;background:#34495e;">Domingo</span></h1>

                       <div class="one half padded">
                        <label>Desayuno</label>
                        <textarea name="desayuno_domingo"  placeholder="Desayuno" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion </label>
                        <textarea name="colacion_desayuno_domingo"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Comida</label>
                        <textarea name="comida_domingo"  placeholder="Comida" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Colacion</label>
                        <textarea name="colacion_cena_domingo"  placeholder="Colacion" required></textarea>
                      </div>

                      <div class="one half padded">
                        <label>Cena</label>
                        <textarea name="cena_domingo"  placeholder="Cena" required></textarea>
                      </div>

                  </div>
                </div>
              </div>
            </div>   
        

        <div class="one half padded">
           <input type="hidden" id="id_diabetico" name="id_diabetico" value="<?php echo $rsEmp["id_diabetico"]; ?>" />
        </div>

        <br><br>

        <button type="submit" style="float:right;" class="green button submit">Enviar Mail <i class="icon-location-arrow icon-1x"></i></button>
     
    </form>

        </div>

    </p>

</fieldset>


         </p>
        </section>

      </article>



   <?php include('models/footer.php'); ?>





</body>
</html>