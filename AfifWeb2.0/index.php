<!DOCTYPE html>

<?php 

//$msg="";

//if(isset($POST['submit'])) {
    //require 'PHPMailer/PHPMailerAutoLoad.php';

    //function sendmail($to, $fromName, $body, $attachment) {
        // $mail = new PHPMailer();
        // $mail->setFrom('$from,$fromName');
        // $mail->addAddress($to);
        // $mail->addAttachment($attachment);
        // $mail->Subject = $mailSubject;
        // $mail->Body = "Pesan dari ".$mailFrom .", dengan e-mail " .$mailEmail ."; ".$mailMessage;
        // $mail->isHTML(isHtml: false);

        //return $mail->send();
    //}

    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $body = $_POST['body'];

  //     $file = "attachment/" . basename($_FILES['attachment']['name']);
  //     if (move_uploaded_files($_FILES['attachment']['tmp_name'],$file)) {
  //         if(sendemail(to:'rayhanalifinzi@gmail.com',$email,$name,$body,$file)){
  //          $msg = "Email Successfully Sent!";
  //          sendemail(to:'rayhanalifinzi@gmail.com', from:'website@cpi.com', fromname: 'Website', body: $body);
  //         } else {
  //             $msg = "Message is not successfully delivered";
  //         } else{
  //             $msg = "Please check your attachment";
  //         }
      
  //     }
  // }

?>

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
  <section class="red-sec" id="about" style="background-image: url('img/afifmiqi.jpg');">
    <div class="container-fluid">

      <!-- <div class="row">
        <div class="col-md-12">
          <img class="profile_picture  img-responsive center-block img-circle" src="img/miqi.jpg" alt="profile picture">
        </div>
      </div> -->
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
        <div class="modal-body">

          <form  id="arooly_cform" id="contact-form" method="post" action="send_mail.php">

            <div class="form-group">
              <label for="inputName">Name</label>
              <div class="input-group Name">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" id = "mail_to" name = "mail_to" value = "sayheymiqi@gmail.com" hidden>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
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
                <textarea class="form-control" name="body" placeholder="Pesanmu hari ini" required data-validation-required-message="Please enter a message." style="height: 100px;"></textarea>
                <!-- <input type = "file" name = "attachment"> -->
              </div>
            </div>

            <div class="text-center"><input type="submit" name = "submit" class="btn btn-dark"
                style="font-size:20px;font-family: 'Futura,Trebuchet MS,Arial,sans-serif';border-radius: 20px;">
            </div>


          </form>
        </div>

      </div>
    </div>
  </div>




</body>


</html>