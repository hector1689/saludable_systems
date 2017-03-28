<?php
session_start();
ini_set('display_errors',1);
require("PHPMailer/class.phpmailer.php");
require("PHPMailer/class.smtp.php");
include("includes/conexion.php");

//https://www.google.com/settings/security/lesssecureapps
//http://phpmailer.worxware.com/

	function send($correo,$subject,$nombre,$desayuno_lunes,$colacion_desayuno_lunes,$comida_lunes,$colacion_cena_lunes,$cena_lunes,$desayuno_martes,$colacion_desayuno_martes,$comida_martes,$colacion_cena_martes,$cena_martes,$desayuno_miercoles,$colacion_desayuno_miercoles,$comida_miercoles,$colacion_cena_miercoles,$cena_miercoles,$desayuno_jueves,$colacion_desayuno_jueves,$comida_jueves,$colacion_cena_jueves,$cena_jueves,$desayuno_viernes,$colacion_desayuno_viernes,$comida_viernes,$colacion_cena_viernes,$cena_viernes,$desayuno_sabado,$colacion_desayuno_sabado,$comida_sabado,$colacion_cena_sabado,$cena_sabado,$desayuno_domingo,$colacion_desayuno_domingo,$comida_domingo,$colacion_cena_domingo,$cena_domingo,$consultorio, $direccion,$telefono,$cp,$correo_consultorio,$telefono_2,$colonia,$municpio,$estado)
{
	$mail = new PHPMailer() ;

	$body = 
'<html>
  <head>
  <meta charset="utf-8" />
  </head>
  <body>
    <div>
      <div id="ecxwrapper" dir="ltr" style="background-color:#f5f5f5;padding:70px 0 70px 0;width:100%;">
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
          <tbody>
            <tr>
              <td align="center" valign="top">
                <div id="ecxtemplate_header_image"></div>
                <table border="0" cellpadding="0" cellspacing="0"  id="ecxtemplate_container" style="box-shadow:0 1px 4px rgba(0,0,0,0.1)  !important;background-color:#fdfdfd;border:1px solid #dcdcdc;border-radius:3px !important;">
                  <tbody>
                    <tr>
                      <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0"  id="ecxtemplate_header" style="background-color:#557da1;border-radius:3px 3px 0 0 !important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;">
                          <tbody>
                            <tr>
                              <td id="ecxheader_wrapper" style="padding:36px 48px;display:block;">
                              <!--Image Company Mail-->
                              
                                <h1 style="color:#ffffff;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:30px;font-weight:300;line-height:150%;text-align:left;text-shadow:0 1px 0 #7797b4;width: 100%;"> '.$consultorio.' </h1>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="ecxtemplate_body">
                          <tbody>
                            <tr>
                              <td valign="top" id="ecxbody_content" style="background-color:#fdfdfd;">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                  <tbody>
                                    <tr>
                                      <td valign="top" style="padding:48px;">
                                        <div id="ecxbody_content_inner" style="color:#737373;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:14px;line-height:150%;text-align:left;">
                                        <!--text mail-->
                                        <h3>Asunto: '.$subject.'</h3>
                                        <hr>
                                       <table>
                                          <tr>
                                            <td><strong>Lunes</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                            <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                            <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                            <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                            <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>

                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_lunes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_lunes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_lunes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_lunes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_lunes.'</td>
                                          </tr>
                                          
                                        </table>
                                        <br>
                                        <hr>
                                          <table >
                                         
                                          <tr>
                                            <td><strong>Martes</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>
                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_martes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_martes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_martes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_martes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_martes.'</td>
                                          </tr>
                                          
                                        </table>
                                        <br>
                                        <hr>
                                        <table >
                                         
                                          <tr>
                                            <td><strong>Miercoles</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>
                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_miercoles.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_miercoles.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_miercoles.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_miercoles.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_miercoles.'</td>
                                          </tr>
                                          
                                        </table>
                                        <br>
                                        <hr>
                                        <table >
                                         
                                          <tr>
                                            <td><strong>Jueves</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>
                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_jueves.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_jueves.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_jueves.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_jueves.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_jueves.'</td>
                                          </tr>
                                          
                                        </table>
                                        <br>
                                        <hr>
                                        <table >
                                         
                                          <tr>
                                            <td><strong>Viernes</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>
                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_viernes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_viernes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_viernes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_viernes.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_viernes.'</td>
                                          </tr>
                                          
                                        </table>
                                        <br>
                                        <hr>
                                        <table >
                                         
                                          <tr>
                                            <td><strong>Sabado</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>
                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_sabado.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_sabado.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_sabado.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_sabado.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_sabado.'</td>
                                          </tr>
                                          
                                        </table>
                                        <br>
                                        <hr>
                                        <table >
                                         
                                          <tr>
                                            <td><strong>Domingo</strong></td>

                                          </tr>
                                           <tr>
                                            <td><strong>Desayuno</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Comida</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Colacion</strong></td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td><strong>Cena</strong></td>
                                          </tr>
                                          <tr>
                                            <td>'.$desayuno_domingo.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_desayuno_domingo.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$comida_domingo.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$colacion_cena_domingo.'</td>
                                             <div style="
                                            width:100px;height:100px;
                                            border-right:3px solid #ccc;
                                            "></div>
                                            <td>'.$cena_domingo.'</td>
                                          </tr>
                                          
                                        </table>

                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">  
                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="ecxtemplate_footer">
                          <tbody>
                            <tr>
                              <td valign="top" style="padding:0;">
                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                  <tbody>
                                    <tr>
                                      <td colspan="2" valign="middle" id="ecxcredit" style="padding:0 48px 48px 48px;border:0;color:#99b1c7;font-family:Arial;font-size:12px;line-height:125%;text-align:center;">
                                      <hr width="800">
                                      <!--Footer text mail-->
                                        Direccion: '.$direccion.','.$colonia.','.$municpio.','.$estado.'<br>
                                        Telefono: '.$telefono_2.', Celular: '.$telefono.'<br>
                                        C.P: '.$cp.'<br>
                                        Correo Electronico: '.$correo_consultorio.'
                                        <hr width="800">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>';
				 				 
		$body .= "";

		$mail->IsSMTP(); 

		
		//Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP
 		$mail->Host = "smtp.gmail.com";		
		$mail->Port       = 465;  
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; 
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		
		
		//Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  
		$mail->From     = $correo;
		$mail->FromName = $consultorio;
		$mail->Subject  = $subject;
		$mail->AltBody  = "Leer"; 
		$mail->MsgHTML($body);

		// Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
		$mail->AddAddress($correo,'');
		$mail->SMTPAuth = true;

		// Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@midominio.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta 

		$mail->Username = "hectorpaquito1689@gmail.com";
		$mail->Password = "hector89"; 

		if($mail->Send())
		{

			echo "<script> alert('Se Envio Correctamente');window.location='inicio.php';</script>";
			//return true;
			
			return $body; 
		}else
		{
			echo "<script> alert('No Se Envio Correctamente');window.location='inicio.php';</script>";
			return false;
			die();
		}
	}

/*function sendgmail($correo,$nombre)
{
	$mail = new PHPMailer() ;

	$body = '<table width="537" height="662" border="1">
  <tbody>
    <tr>
      <td width="253" height="94">Buenas tardes señor '.$nombre.'</td>
      <td width="557">'.$descripcion.'</td>
    </tr>
    <tr>
      <td colspan="2"><img src="http://www.comolohicieron.com.mx/wp-content/uploads/2015/03/Screen-Shot-2015-03-29-at-3.36.49-PM-816x497.png"></td>
    </tr>
  </tbody>
</table>';
				 				 
		$body .= "";

		$mail->IsSMTP(); 

		//Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP
 		$mail->Host = "smtp.gmail.com";		
		$mail->Port       = 465;  
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; 
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		
		//Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  
		$mail->From     = "hectorpaquito1689@gmail.com";
		$mail->FromName = "hectirin";
		$mail->Subject  = "Hola este es una prueba de mail";
		$mail->AltBody  = "Leer"; 
		$mail->MsgHTML($body);

		// Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
		$mail->AddAddress($correo,'');
		$mail->SMTPAuth = true;

		// Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@midominio.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta 
		$mail->Username = "hectorpaquito1689@gamil.com";
		$mail->Password = "hector89"; 
		if($mail->Send())
		{			
			return $body; 
		}else
		{
			return false;
			die();
		}
	}*/
    $consulta_mysql='SELECT * FROM administradores WHERE nombre_administrador = "'.$_SESSION['usuario'].'" ';
  $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  while($fila=mysql_fetch_array($resultado_consulta_mysql)){
    $consultorio = $fila['nombre_consultorio'];
    $direccion = $fila['direccion_consultorio'];
    $telefono = $fila['telefono'];
    $cp = $fila['c.p'];
    $correo_consultorio = $fila['correo_consultorio'];
    $telefono_2 = $fila['telefono_2'];
    $colonia = $fila['colonia'];
    $municpio = $fila['municipio'];
    $estado = $fila['estado'];

$html = send(
	$_POST['correo'],
	$_POST['subject'],
	$_POST['nombre'],

	$_POST['desayuno_lunes'],
	$_POST['colacion_desayuno_lunes'],
	$_POST['comida_lunes'],
	$_POST['colacion_cena_lunes'],
	$_POST['cena_lunes'],

	$_POST['desayuno_martes'],
	$_POST['colacion_desayuno_martes'],
	$_POST['comida_martes'],
	$_POST['colacion_cena_martes'],
	$_POST['cena_martes'],

	$_POST['desayuno_miercoles'],
	$_POST['colacion_desayuno_miercoles'],
	$_POST['comida_miercoles'],
	$_POST['colacion_cena_miercoles'],
	$_POST['cena_miercoles'],

	$_POST['desayuno_jueves'],
	$_POST['colacion_desayuno_jueves'],
	$_POST['comida_jueves'],
	$_POST['colacion_cena_jueves'],
	$_POST['cena_jueves'],

	$_POST['desayuno_viernes'],
	$_POST['colacion_desayuno_viernes'],
	$_POST['comida_viernes'],
	$_POST['colacion_cena_viernes'],
	$_POST['cena_viernes'],

	$_POST['desayuno_sabado'],
	$_POST['colacion_desayuno_sabado'],
	$_POST['comida_sabado'],
	$_POST['colacion_cena_sabado'],
	$_POST['cena_sabado'],

	$_POST['desayuno_domingo'],
	$_POST['colacion_desayuno_domingo'],
	$_POST['comida_domingo'],
	$_POST['colacion_cena_domingo'],
	$_POST['cena_domingo'],

  $consultorio,
  $direccion,
  $telefono,
  $cp,
  $correo_consultorio,
  $telefono_2,
  $colonia,
  $municpio,
  $estado
  );


   }
  
?>