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
          <h1>CLIENTES <i class="icon-group icon-1x"></i></h1> 
          <hr>
          <fieldset> 
            <legend>Email <i class="fa fa-envelope-open" aria-hidden="true"></i></legend>
          <div class="row">
           <form action="email_paciente.php" method="post" class="cmxform" id="commentForm">

            <label >Subject</label>
            <input  type="text" name="subject_patient" id="cname" placeholder="Subject" required>
            <div style="height: 20px;"></div>

            <?php include("includes/patients_select.php"); ?>
            <div style="height: 20px;"></div>

            <textarea class="email" name="email" ></textarea>
            <div style="height: 20px;"></div>
            
            <button type="submit" style="float:right;" class="green button submit">Enviar Mail <i class="icon-location-arrow icon-1x"></i></button>

           </form>
         </div>

         </fieldset>
    </section>


  </article>
     <?php include('models/footer.php'); ?>
</body>
</html>