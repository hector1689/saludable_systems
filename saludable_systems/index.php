<?php
//Definimos la codificación de la cabecera.
header('Content-Type: text/html; charset=utf-8');
//Importamos el archivo con las validaciones.
require_once 'includes/validaciones.php';
//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, sino se guardará null.
$nnombre = isset($_POST['nnombre']) ? $_POST['nnombre'] : null;
$npassword = isset($_POST['npassword']) ? $_POST['npassword'] : null;

//Este array guardará los errores de validación que surjan.
$errores = array();http://localhost/saludable_systems/image/fondo_tp.png
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Valida que el campo nombre no esté vacío.
    if (!validaRequerido($nnombre)) {
        $errores[] = '<p class="error message">El campo nombre es incorrecto</p>';
    }
    //Valida la edad con un rango de 3 a 130 años.

    //Valida que el campo email sea correcto.
    if (!validaRequerido($npassword)) {
        $errores[] = '<p class="error message">El campo edad es incorrecto</p>';
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
<?php include('models/head.php'); ?>
</head>
<body >

	       <article class="row">
        <section class="four fourths  padded bounceInDown animated">
        <?php include("models/header_img.php"); ?>
        
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
            <center><button type="submit" class="small turquoise"><i class="icon-signin icon-1x"></i> Inicar Sesion</button></center>
          </form>
       
			  
         </p>
         </fieldset>
         </div>
         <br>
         <br>
         <hr>
        </section>

      </article>
      <?php include('models/footer.php'); ?>	     
</body>
</html>



