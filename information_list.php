<?php
ini_set("display_errors", "Off");
echo "please remember the ID with sortID then click the button";
echo "<td><form name=\"input\" action=\"check.php\" method=\"get\"><input type=\"submit\" value=\"check\" /> </td>";
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'mysql');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("languagevote", $con);

$sql="SELECT * FROM goods WHERE sortID = '".$q."'";

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
 echo "<td> <img src=\"$name\" width='300' height='450'> </td>";
 echo "<td>"       . $row['name'] .        "</td>";
 echo "<td>"       . $row['ID'] .          "</td>";
 echo "<td>"       . $row['sortID'] .           "</td>";

 /*echo" <td><a href=\"check.php?query=$name2\">query</a>; </td>";*/
/*echo "<td><form name=\"input\" action=\"check.php\" method=\"get\"><input type=\"submit\" value=\"check\" /> </td>";*/
 $name2 =  $row['ID'];

 echo "</tr>";
 }

mysql_close($con);

?>
