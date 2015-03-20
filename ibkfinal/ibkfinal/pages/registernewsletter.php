<?php



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
?>