<?php 
require("connection.php");
global $con;

$rowID = $_POST['rowid'];

$sql = ("SELECT Status FROM Photo_Gallery WHERE id = '$rowID'");
$result = $con->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
        
        $status = $row["Status"];
        if ($status == 1)
        {
        $sql = ("UPDATE Photo_Gallery SET Status = '0' WHERE id = '$rowID';");     
        }
        else
        {
        $sql = ("UPDATE Photo_Gallery SET Status = '1' WHERE id = '$rowID';");
        }
}
}
$addnews = $con->query($sql);
	 if($addnews == false)
     {
	   echo"An error has occured".mysql_error();
	 }
    else
     {
        header("Location: http://localhost:8080/ibkfinal/trunk/ibkfinal/ibkfinal/pages/admin_main.php#photogallery");
     }
$con->close()
?>