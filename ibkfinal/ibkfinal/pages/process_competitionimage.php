<?php 
require("connection.php");
global $con;
require_once "MailChimp.php";



    $ftp_server = "ftp.ittybittykids.com.au";
	$ftp_user = "ibkevent001";
	$ftp_pass = "Bris@001";
    $conn_id = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");    
    $login_result = ftp_login($conn_id, $ftp_user, $ftp_pass); 

foreach ($_FILES["fileselect"]["error"] as $key => $error){
    if(isset($_POST["btnSubmit"])) {
    $tempname = $_FILES["fileselect"]["tmp_name"][$key];
    $filename = $_FILES["fileselect"]["name"][$key];
    $targetfile = "/public_ftp/Competition" .  basename($filename);
    $uploadOk = 1;
    $extname = pathinfo($targetfile,PATHINFO_EXTENSION);
        
//    $fp      = fopen($tempname, 'r');
//    $content = fread($fp, filesize($tempname));
//    $content = addslashes($content);
//    fclose($fp);    
    
    $check = getimagesize($tempname);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($targetfile)) {
    echo "<script>alert('The file " . $filename . " already exists. Please try again. ')</script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileselect"]["size"][$key] > 1000000) {
    echo "<script>alert('The file " . $filename . " is too large.')</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($extname != "jpg" && $extname != "png" && $extname != "jpeg"
&& $extname != "bmp" && $extname != "JPEG" && $extname != "PNG"
&& $extname != "JPG" && $extname != "BMP"){
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & BMP files are allowed.')</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
       echo "<script>alert('There was an error uploading the file, please try again.')</script>";
    } else {
    if ($error == UPLOAD_ERR_OK) {                  
        
                    //move_uploaded_file($tempname, $targetfile);
        
        if (ftp_put($conn_id, $targetfile, $tempname, FTP_BINARY)) {
                                                    
                            
                            $sql = ("CALL InsertCompImage('".$ftp_server . $targetfile."','$email')");         
                            $addnews = $con->query($sql);
                            if($addnews == false){                    
	                           echo"An error has occured".mysqli_error($con);
                            }else{                                            
                                                           }
        } else {
            echo "There was a problem while uploading $filename\n";
        }        
        } else {
            echo "<script>alert('There was an error uploading the file, please try again.')</script>";
        }
    }

}
}
ftp_close($conn_id);

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
    
    $email = $_POST['txtemail'];
    $fname = "NOT";
    $lname = "AVAILABLE";
        $MailChimp = new \Drewm\MailChimp('4e63c19b5cdcc2816645336b2b942137-us10');
    if (isset($email)) {
        $result = $MailChimp->call('lists/subscribe', array(
        'id'                => '0c59f094b6',
        'email'             => array('email'=>$email),
        'merge_vars'        => array('FNAME'=>$fname, 'LNAME'=>$lname),
        'double_optin'      => false,
        'update_existing'   => true,
        'replace_interests' => false,
        'send_welcome'      => false,
        ));
    }

}
?>