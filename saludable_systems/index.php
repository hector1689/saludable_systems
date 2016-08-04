<?php
//Definimos la codificación de la cabecera.
header('Content-Type: text/html; charset=utf-8');
//Importamos el archivo con las validaciones.
require_once 'validaciones.php';
//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, sino se guardará null.
$nnombre = isset($_POST['nnombre']) ? $_POST['nnombre'] : null;
$npassword = isset($_POST['npassword']) ? $_POST['npassword'] : null;

//Este array guardará los errores de validación que surjan.
$errores = array();
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Valida que el campo nombre no esté vacío.
    if (!validaRequerido($nnombre)) {
        $errores[] = 'El campo nombre es incorrecto.';
    }
    //Valida la edad con un rango de 3 a 130 años.

    //Valida que el campo email sea correcto.
    if (!validaRequerido($npassword)) {
        $errores[] = 'El campo edad es incorrecto.';
    }
    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if(!$errores){
        header('Location: validado.php');
        exit;
    }
}
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
<!--<![endif]-->
<!--[if lte IE 9]>
<link type="text/css" rel="stylesheet" href="/css/groundwork-core.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-type.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-ui.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-anim.css">
<link type="text/css" rel="stylesheet" href="/css/groundwork-ie.css">
<![endif]-->


</head>
<body >

	       <article class="row">
        <section class="four fourths  padded bounceInDown animated"><img src="image/colores.png" alt="">
        
          <hr>
          <br>
          <br>
          <div class="one fourths  padded bounceInDown animated" style="left:500px;">
          <h1>Usuario <i class="icon-user icon-1x"></i></h1> 
                 <?php if ($errores): ?>
            <ul style="color:red;">
                <?php foreach ($errores as $error): ?>
                    <li> <?php echo $error ?> </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
          <br>
          <fieldset> 
        <legend>Inicio Usuario <i class="icon-power-off icon-1x"></i></legend>
          <p>
    

            <form method="POST" action="validar.php">
      <input type="text" name="nnombre" placeholder="Usuario" value="<?php echo $nnombre ?>" />
      <br />
      <input type="password" name="npassword" placeholder="Contraseña" value="<?php echo $npassword ?>" />
      <br />
      <button type="submit" class="small turquoise"><i class="icon-signin icon-1x"></i> Inicar Sesion</button>
    </form>
 
			
         </p>
         </div>
         </fieldset>
        </section>

      </article>




	<script type="text/javascript" src="groundwork-master/js/libs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="groundwork-master/js/groundwork.all.js"></script>
</body>
</html>



