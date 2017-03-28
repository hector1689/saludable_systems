<?php
session_start();
ini_set('display_errors',1);
require("PHPMailer/class.phpmailer.php");
require("PHPMailer/class.smtp.php");
include("includes/conexion.php");

 


//https://www.google.com/settings/security/lesssecureapps
//http://phpmailer.worxware.com/

	function send($patient_email,$subject_patient,$email,$consultorio, $direccion,$telefono,$cp,$correo_consultorio,$telefono_2,$colonia,$municpio,$estado)
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
                <table border="0" cellpadding="0" cellspacing="0" width="600" id="ecxtemplate_container" style="box-shadow:0 1px 4px rgba(0,0,0,0.1)  !important;background-color:#fdfdfd;border:1px solid #dcdcdc;border-radius:3px !important;">
                  <tbody>
                    <tr>
                      <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0"  id="ecxtemplate_header" style="background-color:#557da1;border-radius:3px 3px 0 0 !important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;">
                          <tbody>
                            <tr>
                              <td id="ecxheader_wrapper" style="padding:36px 48px;display:block;">
                              <!--Image Company Mail-->
                              
                                <h1 style="color:#ffffff;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:30px;font-weight:300;line-height:150%;text-align:center;text-shadow:0 1px 0 #7797b4;width: 100%;">
                                '.$consultorio.' 
                                </h1>
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
                                            <center><h3>'.$subject_patient.' </h3></center>
                                        <hr>
                                       <table>
                                          <tr>
                                            <td>'.$email.'</td>
                                          </tr>
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
                                      <!--Footer text mail-->
                                        Direccion: '.$direccion.','.$colonia.','.$municpio.','.$estado.'<br>
                                        Telefono: '.$telefono_2.', Celular: '.$telefono.'<br>
                                        C.P: '.$cp.'<br>
                                        Correo Electronico: '.$correo_consultorio.'
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
		$mail->From     = $patient_email;
		$mail->FromName = $consultorio;
		$mail->Subject  = $subject_patient;
		$mail->AltBody  = "Leer"; 
		$mail->MsgHTML($body);

		// Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
		$mail->AddAddress($patient_email,'');
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

	$_POST['patient_email'],
	$_POST['subject_patient'],
	$_POST['email'],
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