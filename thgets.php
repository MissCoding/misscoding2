<?php
ini_set("display_errors", "Off");

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);

$sql="SELECT * FROM goods WHERE 1";

$result = mysql_query($sql);

echo "<table border='2'>
<tr>
<th>~~~~~~~~~~~~~~~picture~~~~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~~~~~name~~~~~~~~~~~~~~~             </th>
<th>~~~~~~~~~~~~~~~ID~~~~~~~~~~~~~~~</th>
<th>~~~~~~~~~~~~~~~sortID~~~~~~~~~~~~~~~</th>


</tr>";           
while($row = mysql_fetch_array($result))
 {

 echo "<tr align=\"center\">";
  $name = $row['pic'];
 echo "<td> <img src=\"$name\" width='300' height='400'> </td>";
 echo "<td>"       . $row['name'] .        "</td>";
 echo "<td>"       . $row['ID'] .          "</td>";
 echo "<td>"       . $row['sortID'] .           "</td>";
 $name2 =  $row['ID'];
 echo "</tr>";
 }

mysql_close($con);

?>
