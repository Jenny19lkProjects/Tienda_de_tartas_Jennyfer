<?php
    use PHPMailer\PHPMailer\PHPMailer;
    
    require_once "phpmailer/PHPMailer.php";
require_once "phpmailer/SMTP.php";
require_once "phpmailer/Exception.php";

$mail=new PHPMailer(true);
$alert = ''; // Inicializa $alert para evitar errores
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar_formulario'])) {

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
    $email = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
      
	
	try{
		//SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "jenny.fuentes7enri@gmail.com"; //enter you email address
        $mail->Password = 'ldai fvap pbmc cqtd'; //enter you email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;
		
		$mail->setFrom('jenny.fuentes7enri@gmail.com');
        $mail->addAddress('jenny.fuentes7enri@gmail.com'); //enter you email address
		
		
		$mail->isHTML(true);
		$mail->Subject= $asunto ;
		$mail->Body="<h3>Name : $nombre <br>Email: $email <br>Mensaje : $mensaje";
		
		$mail->send();
		
		
		$alert='<div class="alert-success">
					<span>Mensaje enviado! Gracias por contactar con nosotros. </span>
				</div>';
	} catch(Exception $e){
		$alert='<div class="alert-error">
					<span>'.$e->getMessage().'</span>
				</div>';
	}
	
}
   
?>
