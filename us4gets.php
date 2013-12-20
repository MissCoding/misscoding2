<?php
ini_set("display_errors", "Off");

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);

$sql="SELECT * FROM saler WHERE 1";

$result = mysql_query($sql);

echo "<table border='2'>
<tr>
<th>~~~~~~~~~username~~~~~~~~~</th>
<th>~~~~~~~~~password~~~~~~~~~</th>
<th>~~~~~~~~~~email~~~~~~~~~~~</th>
<th>~~~~~~~~~~~name~~~~~~~~~~</th>
<th>~~~~~~~~~~~~qq~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~phone~~~~~~~~~~</th>
</tr>";           
while($row = mysql_fetch_array($result))
 {

 echo "<tr align=\"center\">";
 echo "<td>"       . $row['username'] .        "</td>";
 echo "<td>"       . $row['password'] .          "</td>";
 echo "<td>"       . $row['email'] .        "</td>";
 echo "<td>"       . $row['name'] .          "</td>";
 echo "<td>"       . $row['qq'] .        "</td>";
 echo "<td>"       . $row['phone'] .          "</td>";

 echo "</tr>";
 }

mysql_close($con);

?>
