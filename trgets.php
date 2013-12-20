<?php
ini_set("display_errors", "Off");

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);

$sql="SELECT * FROM ord where 1";

$result = mysql_query($sql);

echo "<table border='2'>
<tr>
<th>~~~~~~~~~~~~~~ID~~~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~~cus_id~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~~sal_id~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~~~time~~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~goods_id~~~~~~~~~~~</th>

</tr>";           
while($row = mysql_fetch_array($result))
 {

 echo "<tr align=\"center\">";
 echo "<td>"       . $row['ID'] .          "</td>";
 echo "<td>"       . $row['cus_id'] .      "</td>";
 echo "<td>"       . $row['sal_id'] .      "</td>";
 echo "<td>"       . $row['time'] .        "</td>";
 echo "<td>"       . $row['goods_id'] .    "</td>";
 echo "</tr>";
 }

mysql_close($con);

?>
