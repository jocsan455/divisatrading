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

    $email      = $_POST['email'];
    $subject = 'CLIENTE SOLICITANDO INFORMACION';

        


        $toemail = 'jocsan455@gmail.com'; // Your Email Address
        $toname = 'forex vortex'; // Your Name


            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            
            $email = isset($email) ? "Email: $email<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $telefono $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

echo "hola config";
?>