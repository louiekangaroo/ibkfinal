<?php


include ('lib/swift_required.php');
require("connection.php");

require_once "MailChimp.php";


$emailadd = $_POST['eadd'];
$fname = $_POST['fname'];
    $MailChimp = new \Drewm\MailChimp('4e63c19b5cdcc2816645336b2b942137-us10');
    if (isset($emailadd)) {
        $result = $MailChimp->call('lists/subscribe', array(
        'id'                => '5e6d83a21a',
        'email'             => array('email'=>$emailadd),
        'FNAME'             => $fname,
        'double_optin'      => false,
        'update_existing'   => true,
        'replace_interests' => false,
        'send_welcome'      => false,
        ));
    }

$transport = Swift_SmtpTransport::newInstance('p3plcpnl0389.prod.phx3.secureserver.net', 465,'ssl')
        ->setUsername('admin@ittybittykids.com.au')
        ->setPassword('~1q2w3e4r')
        ;
         
// Create the message
$message = Swift_Message::newInstance();
//receiver
$message->setTo($emailadd);
//sender
$message->setFrom('admin@liezaevents.com.au');
//subject
$message->setSubject('Itty Bitty Newsletter');
//msg lenght
$message->setMaxLineLength(10000);
         
$message->setBody("Thanks for becoming a friend of Itty Bitty Kids Expo.<br><br>"
."As part of the family you'll receive regular news, updates and unique offers exclusive to our friends.<br><br>"
."We look forward to meeting you on Saturday 28 and Sunday 29 November at the Royal International Convention Centre located at the Brisbane Showgrounds.<br><br><br>"
."Kind regards,<br><br>"
."The Itty Bitty Kids Expo Team<br><br><br><br>"
."<i><b>Note:</b> This is an automated response. Please do not reply.</i>",'text/html');
                
$mailer = Swift_Mailer::newInstance($transport);
$send = $mailer->send($message);


echo  "<script>location.href = 'http://ittybittykids.com.au/'</script>";
?>