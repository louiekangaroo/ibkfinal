<?php
require("connection.php");
global $con;
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT CompanyName, FirstName, LastName, EmailAddress, RegType, Date FROM Registration_Info";
if(!($result = $con->query($query)))
{
echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
}
else
{
    $tableresult = "
    <thead>
     <tr>
      <th>Company Name</th>
      <th>Full Name</th>
      <th>Email Address</th>
      <th>Registration Type</th>
      <th>Date</th>
         </thead>
  <tbody class='list'>
         </tbody>";
                      
    $tableresult2 = "";
        while($row = $result->fetch_array(MYSQLI_BOTH))
        {
            if ($tableresult2 == "")
            {
                $tableresult2 = "
    </tr><tr><td class='cname'>{$row[0]}</td><td class='name'>{$row[1]} {$row[2]}</td><td class='email'>{$row[3]}</td><td class='type'>{$row[4]}</td><td class='date'>{$row[5]}</td></tr>\n"; 
            }
            else 
            {
                $tableresult2 = $tableresult2."
    </tr><tr><td class='cname'>{$row[0]}</td><td class='name'>{$row[1]} {$row[2]}</td><td class='email'>{$row[3]}</td><td class='type'>{$row[4]}</td><td class='date'>{$row[5]}</td></tr>\n";
            }
       
        
        }
    echo $tableresult.$tableresult2;
    }

$result->close();
$con->close();
?>