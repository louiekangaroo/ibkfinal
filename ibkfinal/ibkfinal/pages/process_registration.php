<?php 

include ('lib/swift_required.php');
require("connection.php");
global $con;

$compname = $_POST['company'];
$comptype = $_POST['comptype'];
$compcat = $_POST['compcat'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jobtitle = $_POST['jobtitle'];
$pnumber = $_POST['pnumber'];
$eadd = $_POST['eadd'];
$remarks = $_POST['remarks'];
$regtype = $_POST['regtype'];

$clean_compname = stripslashes($compname);
$clean_comptype = stripslashes($comptype);
$clean_compcat = stripslashes($compcat);
$clean_fname = stripslashes($fname);
$clean_lname = stripslashes($lname);
$clean_jobtitle = stripslashes($jobtitle);
$clean_pnumber = stripslashes($pnumber);
$clean_eadd = stripslashes($eadd);
$clean_remarks = stripslashes($remarks);
$clean_regtype = stripslashes($regtype);


     $sql = ("CALL  InsertRegistration('$clean_compname','$clean_comptype','$clean_compcat','$clean_fname','$clean_lname','$clean_jobtitle','$clean_pnumber','$clean_eadd','$clean_remarks','$clean_regtype')");
$addregister = $con->query($sql);

	 if($addregister == false)
     {
	   echo"An error has occured".mysql_error();
	 }
     else
     {
           
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
         
$message->setBody("<b>Company/Organisation Name: </b>".$clean_compname."<br><br>"
."<b>Company/Organisation Type: </b>".$clean_comptype."<br><br>"
."<b>Company/Organisation Type: </b>".$clean_compcat."<br><br>"
."<b>First Name: </b>".$clean_fname."<br><br>"	
."<b>Last Name: </b>".$clean_lname."<br><br>"  
."<b>Job Title: </b>".$clean_jobtitle."<br><br>"
."<b>Phone Number: </b>".$clean_pnumber."<br><br>"
."<b>Contact Email: </b>".$clean_eadd."<br><br>"
."<b>Remarks: </b>".$clean_remarks."<br><br>"
."<b>Interested in : </b>".$clean_regtype."<br><br><br>"
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
$message->setTo($clean_eadd);
//sender
$message->setFrom('admin@ittybittykids.com.au');
//subject
$message->setSubject('Itty Bitty Registration');
//msg lenght
$message->setMaxLineLength(10000);
         
$message->setBody("Thanks for expressing your interest in joining the Itty Bitty Kids Expo.<br><br>"
."We look forward to creating an environment of support, learning and fun with you on <br>"
."Saturday 28 and Sunday 29 November at the Royal International Convention Centre <br>"
."located at the Brisbane Showgrounds.<br><br>"
."We’ll be in touch soon to provide you further information and to answer any questions <br>"
."you have. <br><br>"
."Kind regards,<br><br>"    
."The Itty Bitty Kids Expo Team<br><br><br>"   
."<i><b>Note:</b> This e-mail is automatically generated. Please do not reply.</i>",'text/html');
                
$mailer = Swift_Mailer::newInstance($transport);
$send = $mailer->send($message);
         
         
        if(!$send)
        {
            echo "msg not send";
        }
        else
        {
            echo "msg send";
        } 
        }
?>