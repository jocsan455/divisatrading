<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug  = 2;             
$mail->Host = 'smtp.gmail.com';  
$mail->Port = 587;  
$mail->SMTPSecure = 'tls'; 
$mail->SMTPAuth = true;
$mail->Username = 'divisatrading22@gmail.com';
$mail->Password = 'emailsweb48';  
$message = "";
$status = "false";

    $email      = $_POST['emailemail'];
    $subject = 'CLIENTE SOLICITANDO INFORMACION';

        


        $toemail = 'info@divisatrading.com'; // Your Email Address
        $toname = 'divisa trading'; // Your Name


            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            
            $email = isset($email) ? "Email: $email<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "
            Estimados señores,<br><br>
            Estoy interesad@ en recibir información acerca del PROYECTO ESPECIAL DE INVERSIÓN promocionado en su página web www.divisatrading.com
            Agradezco por favor me contacten a través del siguiente email: $email
            <br>Muchas gracias,
            <br>EL CLIENTE INTERESADO";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

echo "hola config";
?>