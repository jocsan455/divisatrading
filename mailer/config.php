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
$mail->Username = 'forexvortex.social@gmail.com';
$mail->Password = 'SocialPips';  
$message = "";
$status = "false";

    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message        = $_POST['message'];
    $output     = "Name: ".$name."\n\n Email: ".$email."\n\n Subject: ".$subject."\n\n Message: ".$message;

        $subject = isset($subject) ? $subject : 'New Message | Request';


        $toemail = 'jocsan455@gmail.com'; // Your Email Address
        $toname = 'forex vortex'; // Your Name


            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Nombre: $name<br><br>" : '';
            $message = isset($message) ? "message: $message<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $subject = isset($subject) ? "Asunto: $subject<br><br>" : '';
            $message = isset($message) ? "Mensaje: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $subject $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

echo "Muchas gracias! Su mensaje ha sido enviado exitosamente.";
?>