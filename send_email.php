<?php
    use PHPMailer\PHPMailer;
    use PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

// Check if the form is submitted
if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rajkotmahajanpanjarapole.org';  // Replace with your SMTP username
        $mail->Password = 'dm72tWsKWaY_Z8hh';  // Replace with your SMTP password
        $mail->SMTPSecure = 'SSL';
        $mail->Port = 465;

        // Sender and recipient settings
        $mail->setFrom('info@dipen-vasoya.com', 'Dipen Vasoya');
        $mail->addAddress('dipvasoya2310@gmail.com', 'VD Patel');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Phone: $phone<br>Email: $email<br>Message: $message";

        // Send the email
        $mail->send();
        
        $status = "Message has been sent successfully to the Administrator.";
      echo "<script>
            alert('$status');
            window.location.href='contactus.php';
            </script>"; 
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
} else {
    // Redirect back to the form if accessed directly
    header('Location: index.html');
    exit();
}
?>