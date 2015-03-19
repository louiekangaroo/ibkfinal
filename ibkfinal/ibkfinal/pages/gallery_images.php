<?php
require("connection.php");
global $con;

	$ftp_server = "ftp.ittybittykids.com.au";
	$ftp_user = "ibkevent001";
	$ftp_pass = "Bris@001";
    $conn_id = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");    
    $login_result = ftp_login($conn_id, $ftp_user, $ftp_pass); 

foreach ($_FILES["imageselect"]["error"] as $key => $error){
    if(isset($_POST["btnUpload"])) {
    $tempname = $_FILES["imageselect"]["tmp_name"][$key];
    $filename = $_FILES["imageselect"]["name"][$key];
    $targetfile = "/public_ftp/" .  basename($filename);
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
if ($_FILES["imageselect"]["size"][$key] > 1000000) {
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
                                                    
                            
                            $sql = ("CALL InsertImage('".$ftp_server . $targetfile."','$filename')");         
                            $addnews = $con->query($sql);
                            if($addnews == false){                    
	                           echo"An error has occured".mysqli_error($con);
                            }else{                                            
                        header("Location: http://localhost:8080/ibkfinal/trunk/ibkfinal/ibkfinal/pages/admin_main.php#photogallery");                                         }
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
?>
<!--
if(!get_magic_quotes_gpc())
    {
        $filename = addslashes($filename);
    }

        $sql = ("CALL InsertImage('$content','$filename')");         
        $addnews = $con->query($sql);
                    if($addnews == false)
                    {
	                   echo"An error has occured".mysqli_error($con);
                    }                    
        header("Location: http://localhost:8080/ibkfinal/trunk/ibkfinal/ibkfinal/pages/admin_main.php");-->
