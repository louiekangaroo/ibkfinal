<?php 

include ('lib/swift_required.php');
require("connection.php");
global $con;

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msge = $_POST['message'];
 
$transport = Swift_SmtpTransport::newInstance('p3plcpnl0389.prod.phx3.secureserver.net', 465,'ssl')
      ->setUsername('admin@ittybittykids.com.au')
      ->setPassword('~1q2w3e4r')
      ;
         
// Create the message
$message = Swift_Message::newInstance();
//receive
$message->setTo('admin@liezaevents.com.au');
//sender
$message->setFrom('admin@ittybittykids.com.au');
//subject
$message->setSubject('Itty Bitty Registration');
//msg lenght
$message->setMaxLineLength(10000);
         
$message->setBody("<b>Full Name: </b>".$name."<br><br>"
."<b>Contact Email: </b>".$email."<br><br>"
."<b>Subject: </b>".$subject."<br><br>"
."<b>Message: </b>".$msge."<br><br><br>"
."<i><b>Note:</b> This e-mail is automatically generated. Please do not reply.</i>",'text/html');
                
$mailer = Swift_Mailer::newInstance($transport);
$send = $mailer->send($message);
  
 

$transport = Swift_SmtpTransport::newInstance('p3plcpnl0389.prod.phx3.secureserver.net', 465,'ssl')
      ->setUsername('admin@ittybittykids.com.au')
      ->setPassword('~1q2w3e4r')
      ;
         
// Create the message
$message = Swift_Message::newInstance();
//receive
$message->setTo($email);
//sender
$message->setFrom('admin@liezaevents.com.au');
//subject
$message->setSubject('Itty Bitty Registration');
//msg lenght
$message->setMaxLineLength(10000);
         
$message->setBody("Thank you for getting in touch with us.<br><br>"
."We’ll be in contact soon to follow up with your inquiry.<br><br>"
."Kind regards,<br><br>"
."The Itty Bitty Kids Expo Team<br><br><br>"
."<i><b>Note:</b> This e-mail is automatically generated. Please do not reply.</i>",'text/html');
                
$mailer = Swift_Mailer::newInstance($transport);
$send = $mailer->send($message);
  
  header("Location: http://localhost:8080/ibkfinal/trunk/ibkfinal/ibkfinal/pages/index.html"); 
  
?>