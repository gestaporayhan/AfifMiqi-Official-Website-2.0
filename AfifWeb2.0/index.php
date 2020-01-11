<?php
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 // Load Composer's autoloader
 require 'vendor/autoload.php';

 //Create object of PHPMailer Class
 $mail = new PHPMailer(true);

 $result = "";

 if(isset($_POST['submit'])){

   $name = $_POST['fromName'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   try {
    //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    //  $mail->SMTPDebug = 2;
     //$mail->isSMTP();                           // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';      // Set the SMTP server to send through
     $mail->SMTPAuth   = true;                  // Enable SMTP authentication
     $mail->Username   = 'afifmiqi@afifmiqi.com';  // SMTP username
     $mail->Password   = 'afifmuhammadq19';               // SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                  // TCP port to connect to

     $mail->setFrom('afifmiqi@afifmiqi.com', 'FAN MAIL'); //Sender E-mail
     $mail->addAddress('sayheymiqi@gmail.com');     // Add a recipient

     // Content
     $mail->isHTML(true);   //For sending HTML content

     $mail->Subject = 'FAN MAIL - '.$subject;   //E-Mail Subject
     $mail->Body    = 'Nama : '.$name.'<br>Email : '.$email.'<br><br>Pesan : <br><br>'.$message;   //E-Mail body
     
      $mail->send();
      $result = '<div style = "color:green;text-align:center;">
                 Thank you so much for the message. Stay Lovely & Be Nice </div>';
                
     } 
     catch (Exception $e) {
       $result = '<div style = "color:red;text-align:center;">
                   Message could not be sent. Mailer Error: {'.$mail->ErrorInfo.'}
                 </div>';
                 
                 
     }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="icon" type="image/png" href="img/miqi.jpg" style = "border-radius: 0px;">
 <title>Afif Miqi's Website</title>
 <link rel="stylesheet" href="AfifCSS.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
 <section class="red-sec" id="about" style="background-image: url('img/afifmiqi1.jpg');">
   <div class="container-fluid">

     <div class="row d-flex rowtitle">
       <div class="col-md-12 p-2 font-style-cursive">
         <h1 style="text-transform: uppercase;font-weight: bold;">Afif Miqi</h1>
       </div>
     </div>
     <div class="row d-flex rowabout">
       <div class="col-md-12  p-2 style-class">
         <h3 style="padding-bottom: 5px;">The Storyteller</h3>
         <h4>A simple humble Youtube content creator from Jakarta, have a passion to motivates many people. STAY LOVELY. BE NICE</h4>
       </div>
     </div>
     <div class="row d-flex icons">
       <div class="col-md-13  ml-auto">
         <a href="https://www.youtube.com/channel/UCf3qSsHpG36lAHc_3dZ3cEw"><i class="fa fa-youtube fa-3x"></i></a>
         <a href="https://www.instagram.com/kolerism/?hl=en"><i class="fa fa-instagram fa-3x"></i></a>
         <a data-toggle="modal" data-target="#modal-fullscreen"><i class="fa fa-envelope-square fa-3x"></i></a>
         
       </div>
     </div>
   </div>
 </section>


 <div class="modal fade modal-fullscreen" id="modal-fullscreen" tabindex="-1" role="dialog"
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header text-center">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h3 class="modal-title" id="myModalLabel">Hello there, how are you?</h3>
       </div>
       <div class="modal-body" <?= $result ?>>

         <form action="<?php $_SERVER['PHP_SELF'] ?>" id="contact-form" id="arooly_cform"  method="post" >
           <div class="form-group">
             <label for="inputName">Name</label>
             <div class="input-group Name">
               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <input type="text" id = "mail_to" name = "mail_to" value = "sayheymiqi@gmail.com" hidden>
               <input type="text" class="form-control" name="fromName" placeholder="Enter Name" required>
             </div>
           </div>
           <div class="form-group">
             <label for="inputEmail">Email address</label>
             <div class="input-group email">
               <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
               <input type="email" class="form-control" name="email" placeholder="Enter email" required>
             </div>
           </div>
           <div class="form-group">
             <label for="inputName">Subject</label>
             <div class="input-group subject">
               <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
               <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
             </div>
           </div>
           <div class="form-group">
             <label for="inputMessage">Message</label>
             <div class="input-group message">
               <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
               <textarea class="form-control" name="message" placeholder="Pesanmu hari ini" required data-validation-required-message="Please enter a message." style="height: 100px;"></textarea>
               <!--<input type = "file" name = "file[]" multiple="multiple" id="file">-->
             </div>
           </div>
           
           <div class="text-center">
             <input type="submit" name = "submit" id='submit' class="btn btn-dark"
               style="font-size:20px;font-family: 'Futura,Trebuchet MS,Arial,sans-serif';border-radius: 20px;">
           </div>
           <br>
           <br>
           <div class="text-center icons">
                <a href="http://www.afifmiqi.com"><i class="fa fa-refresh fa-2x"></i></a>
                <p style="font-size:12px;color:gray">Click to refresh the form</p>
           </div>


         </form>
       </div>

     </div>
   </div>
 </div>




</body>


</html>