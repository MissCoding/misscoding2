<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("test", $con);

$sql="SELECT * FROM user WHERE id = '".$q."'";

$result = mysql_query($sql);
 echo "<td> <img src=\"$name\" width='300' height='300'> </td>";
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
<th>Jobx</th>
</tr>";

while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['FirstName'] . "</td>";
 echo "<td>" . $row['LastName'] . "</td>";
 echo "<td>" . $row['Age'] . "</td>";
 echo "<td>" . $row['Hometown'] . "</td>";
 echo "<td>" . $row['Job'] . "</td>";
 
 $name =  $row['pic'];
 
 echo "<td> <img src=\"$name\" width='300' height='300'> </td>";
 echo "</tr>";
 }


echo "</table>";

mysql_close($con);
?>
