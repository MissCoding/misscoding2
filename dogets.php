<?php
ini_set("display_errors", "Off");

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);

$sql="SELECT * FROM donate WHERE 1";

$result = mysql_query($sql);

echo "<table border='2'>
<tr>
<th>~~~~~~~~~~~~~ID~~~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~sale_id~~~~~~~~~~~</th>
<th>~~~~~~~~~~~good_id~~~~~~~~~~~</th>
<th>~~~~~~~~~~~~use~~~~~~~~~~~~~~</th>

</tr>";           
while($row = mysql_fetch_array($result))
 {

 echo "<tr align=\"center\">";
 echo "<td>"       . $row['ID'] .         "</td>";
 echo "<td>"       . $row['sale_id'] .    "</td>";
 echo "<td>"       . $row['good_id'] .    "</td>";
 echo "<td>"       . $row['use'] .        "</td>";
 echo "</tr>";
 }

mysql_close($con);

?>
