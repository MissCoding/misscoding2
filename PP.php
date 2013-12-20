<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);
echo  $q ;
$sql="SELECT * FROM goods WHERE sortID = '".$q."'";
echo aaaa;
echo   $row['name'] ;
$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>name</th>
<th>location</th>
<th>price</th>
<th>picture</th>
<th>check</th>
</tr>";
echo   $row['name'] ;
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['location'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";

 $name =  $row['pic'];
 
 echo "<td> <img src=\"$name\" width='300' height='300'> </td>";
 echo "<td><form name=\"input\" action=\"check.php\" method=\"get\"><input type=\"submit\" value=\"check\" /> </td>";
 echo "</tr>";
 }


echo "</table>";

mysql_close($con);
?>
