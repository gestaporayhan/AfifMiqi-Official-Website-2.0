<?php

    $mailto = $_POST['mail_to'];
    $mailSubject = $_POST['subject'];
    $mailMessage = $_POST['body'];
    $mailEmail = $_POST['email'];
    $mailFrom = $_POST['name'];    

    require_once('PHPMailer/PHPMailerAutoLoad.php');
    $mail = new PHPMailer();
    $mail ->isSMTP();
    // $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = '465'; // or 587
    $mail ->isHTML();
    $mail ->Username = "sayheymiqi@gmail.com";
    $mail ->Password = "wagitog17";
    // $mail ->Username = "rayhanalifinzi@gmail.com";
    // $mail ->Password = "rayhanforever116";
    $mail ->SetFrom ('yourgmail@gmail.com');
    $mail ->Subject = $mailSubject;
    $mail ->Body = "Pesan dari ".$mailFrom .", dengan e-mail " .$mailEmail ."; ".$mailMessage;
    $mail ->AddAddress($mailto);
    if(!$mail->Send())
   {
    echo"<script> alert('Message is not sent');window.location='index.php'</script>";
   }
   else
   {   

    echo"<script> alert('Message has been sent successfully!');window.location='index.php'</script>";
   }

  
?>