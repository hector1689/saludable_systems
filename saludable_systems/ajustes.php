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
           <input type="text" id='color-picker' value="#bada55" />
                <script>
               jQuery(document).ready(function($){
                $('#color-picker').iris();
                $('#color-picker').iris('option', 'width', 140,'show');

            });
                </script>
         </div>

         </fieldset>
    </section>


  </article>
     <?php include('models/footer.php'); ?>
</body>
</html>