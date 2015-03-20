 <?php
require("connection.php");
global $con;

$ftp_server = "ftp.ittybittykids.com.au";
	$ftp_user = "ibkevent001";
	$ftp_pass = "Bris@001";
    $conn_id = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");    
    $login_result = ftp_login($conn_id, $ftp_user, $ftp_pass); 

$sql = "SELECT Path FROM Photo_Gallery where Status = 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "
            
            
        <div><img src=\"ftp://" . $row['Path'] . "\" width=\"800px\" height=\"365px\" alt=\"Image\" u=\"image\">
             <img src=\"ftp://" . $row['Path'] . "\" width=\"72px\" height=\"72px\" alt=\"Image\" u=\"thumb\">
            </div>
                              
       ";
        
    }
} else {
    echo "";
}

?>