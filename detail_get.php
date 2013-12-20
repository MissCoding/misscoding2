<?php
ini_set("display_errors", "Off");
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);
echo  $q ;
$sql="SELECT * FROM goods WHERE sortID = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>name</th>
<th>ID</th>
<th>sortID</th>
<th>location</th>
<th>price</th>
<th>picture</th>

</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['ID'] . "</td>";
 echo "<td>" . $row['sortID'] . "</td>";
 echo "<td>" . $row['location'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td> <img src=\"$name\" width='300' height='300'> </td>";
 /*echo" <td><a href=\"check.php?query=$name2\">query</a>; </td>";*/
/*echo "<td><form name=\"input\" action=\"check.php\" method=\"get\"><input type=\"submit\" value=\"check\" /> </td>";*/
 $name2 =  $row['ID'];

 echo "</tr>";
 }

mysql_close($con);
echo 请记录您想查看的商品的ID和sortID,并点击查看按钮;
echo "<td><form name=\"input\" action=\"check.php\" method=\"get\"><input type=\"submit\" value=\"check\" /> </td>";
?>
