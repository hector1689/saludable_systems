 <?php

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
          <?php include("models/usuario.php"); ?>
          <img src="image/logo_grecia.png" width="150px" height="150px" class="pull-left gap-right">
          <h1>Pacientes <i class="icon-group icon-1x"></i></h1> 
          <a href="#add_pacient" rel="modal:open" title="Agregar Paciente"><button class="info">Agregar Paciente <i class="icon-plus-sign-alt icon-1x"></i></button></a>
          <br>
          <fieldset> 
        <legend>Informacion Paciente <i class="icon-book icon-1x"></i></legend>
          <p>
         <?php include('models/table_paciente.php'); ?> 
         </p>
         </fieldset>
    </section>

    <!-- Modal HTML embedded directly into document -->
    <div class="modal" id="add_pacient" style="display:none;">
       <article class="row">
            <section class="four fourths  padded bounceInDown animated">
              <hr><img src="image/logo_grecia.png" width="200px" height="200px" class="pull-left gap-right">
              <h1>Datos Paciente <i class="icon-apple icon-1x"></i></h1>
              <p>
               <?php include('models/modal_add_paciente.php'); ?>
             </p>
            </section>
          </article>
    </div>

  </article>
     <?php include('models/footer.php'); ?>


</body>
</html>



