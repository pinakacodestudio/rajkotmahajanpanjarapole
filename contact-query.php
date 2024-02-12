<?php
  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

	// $secret_key = '6Lfran0nAAAAAEv2J2xHqUWlGGqYDbqeEeN0yDtG';
	// $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha;

	// $response = file_get_contents($url);
	// $response = json_decode($response);

  // if(isset($_POST['submit']) && $response->success == true){
  if(isset($_POST['submit'])){
    $name = $_POST['form_name'];
    $phone = $_POST['form_phone'];
    $email = $_POST['form_email'];
    $msg = $_POST['form_message'];

    //Load Composer's autoloader
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {   
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'info@rajkotmahajanpanjarapole.org';                     //SMTP username
      $mail->Password   = 'dm72tWsKWaY_Z8hh';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('info@rajkotmahajanpanjarapole.org', 'Contact Form');
      $mail->addAddress('info@dipen-vasoya.com', 'Contact Form');     //Add a recipient

      // //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Mahajan Panjarapole contact form';
      $mail->Body    = "This is demo mail for testing purpose.";

      $mail->send();
      $status = "Message has been sent successfully to the Administrator.";
      echo "<script>
            alert('$status');
            window.location.href='contactus.php';
            </script>"; 
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
?>