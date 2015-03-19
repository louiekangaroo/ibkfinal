<?php
require("connection.php");
global $con;
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT id, FileName, DateUploaded, Status FROM Photo_Gallery";
if(!($result = $con->query($query)))
{
echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
}
else
{
    $tableresult = "
    <thead>
     <tr>
      <th>Filename</th>
      <th>Date Uploaded</th>
      <th>State</th>
      <th>Action</th>
    </thead>
  <tbody class='list'>
  </tbody>";
                      
    $tableresult2 = "";
        while($row = $result->fetch_array(MYSQLI_BOTH))
        {
            if ($tableresult2 == "")
            {
                $tableresult2 = "
    <tr><td class='filename'>{$row[1]}</td><td class='date'>{$row[2]}</td><td class='status'>{$row[3]}</td><td class='type'><label class='col-md-4 control-label' for='rowid'></label>
<button id='rowid' name='rowid' class='btn btn-primary' value='{$row[0]}'>Change State</button></td></tr>\n"; 
            }
            else 
            {
                $tableresult2 = $tableresult2."
    <tr><td class='filename'>{$row[1]}</td><td class='date'>{$row[2]}</td><td class='status'>{$row[3]}</td><td class='type'><label class='col-md-4 control-label' for='rowid'></label>
<button id='rowid' name='rowid' class='btn btn-primary' value='{$row[0]}'>Change State</button></td></tr>\n";
            }
       
        
        }
    echo $tableresult.$tableresult2;
    }

$result->close();
$con->close();
?>