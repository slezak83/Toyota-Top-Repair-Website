<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '@gmail.com';                       // SMTP username
    $mail->Password = '';                      // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
	
	
	//Recipient and Sender
	$mail->setFrom('f22b2honda@gmail.com');
    $mail->AddAddress('f22b2honda@gmail.com');     // Add a recipient
	if(isset($_GET['submit'], $_GET['year'], $_GET['model'], $_GET['Technician_Name'], $_GET['Repair_Category'], $_GET['ETC'], $_GET['message'])){
		$year=$_GET['year'];
		$model=$_GET['model'];
		$Technician_Name=$_GET['Technician_Name'];
		$Repair_Category=$_GET['Repair_Category'];
		$ETC=$_GET['ETC'];
		$message=$_GET['message'];}
		
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Repair Procedure Submission '.$year.' '.$model;
	$mail->Body=$Technician_Name.' This is my procedure: '.$message.' Category: '.$Repair_Category.' This should take approximately '.$ETC.' hours.';
	
	//Send Message
	echo'<script type="text/javascript">onClick=alert("Message Sent!")</script>';
	$mail->send();
	echo'<script type="text/javascript">location.replace("SUBMITAREPAIRTAB.html")</script>';
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}