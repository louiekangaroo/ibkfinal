<?php 
require("connection.php");
global $con;
require_once "MailChimp.php";
$email = $_POST['txtemail'];
$fname = "NOT";
$lname = "AVAILABLE";

    $maxsize = 10000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['fileselect']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['fileselect']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['fileselect']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['fileselect']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['fileselect']['tmp_name']));

                        // validate if exist
                        $query = mysqli_query($con, "SELECT * FROM competition_info WHERE email='$email'");
                        if(mysqli_num_rows($query) > 0)
                        {
                            echo "Please Log In First";
                            echo "<script>setTimeout(\"location.href = 'competitions.html';\",1500);</script>";
                        }
                        else
                        {
                            // our sql query
                            $sql = ("CALL InsertCompImage('$email','$imgData')");         

                            $addnews = $con->query($sql);
                            $msg='<p>Image successfully saved in database </p>';
                    
                   
                        }
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['fileselect']['name'].' is '.$_FILES['fileselect']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['fileselect']['error']);
    }
    echo $msg;


// Function to return error message based on error code

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