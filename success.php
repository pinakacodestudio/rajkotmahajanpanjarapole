<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include TCPDF library
require_once('TCPDF-main/tcpdf.php');
// Create TCPDF Instance:

// Create an instance of the TCPDF class.
// php
// Copy code
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Set PDF Header and Footer (Optional):

// You can set header and footer information if needed.
// php
// Copy code
$pdf->SetHeaderData('', 0, 'Title', 'Header Text');
$pdf->setFooterData(array(0,64,0), array(0,64,128));
// Set PDF Meta Information:

// Set the PDF meta information like title, author, etc.
// php
// Copy code
$pdf->SetTitle('HTML to PDF');
$pdf->SetAuthor('Your Name');
// Add a Page:

// Add a page to the PDF.
// php
// Copy code
$pdf->AddPage();
// Write HTML Content:

// Use the writeHTML method to write your HTML content.
// php
// Copy code
$html = '<h1>Hello, World!</h1><p>This is a sample HTML content.</p>';
$pdf->writeHTML($html, true, false, true, false, '');
// Output PDF:

// Output the PDF to the browser or save it to a file.
// php
// Copy code
// $pdf->Output('output.pdf', 'I'); // I: Output to browser, D: Download file

  //Load Composer's autoloader
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

// Send email with attachment
$mail = new PHPMailer();
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'dipen@dipen-vasoya.com';                     //SMTP username
$mail->Password   = '#Dipen@2310';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('dipen@dipen-vasoya.com', 'Invoice');
$mail->addAddress($_SESSION['email'], 'Invoice Received');     //Add a recipient

$mail->Subject = 'Rajkot Mahajan Panjarapole Donation Invoice';
$mail->Body = 'Body of the Email';

// Attach the PDF file
$attachment = $pdf->Output('', 'S');
$mail->addStringAttachment($attachment, 'output.pdf', 'base64', 'application/pdf');

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully';

    // Delete the PDF file after sending the email
    // unlink('output.pdf');
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}

?>