<?php

$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("languagevote", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];

$sql="SELECT * FROM goods WHERE ID='".$temp."'and sortID='".$temp1."'";
$result = mysql_query($sql);

echo "please remember the ID with sortID then click the button";
echo "<td><form name=\"input\" action=\"saler_information.php\" method=\"get\"><input type=\"submit\" value=\"check\" /> </td>";

echo "<table border='1'>
<tr>
<th>~~~~~~~~~~~~~~picture~~~~~~~~~~~~~~~</th>
<th>~~name~~</th>
<th>~~price~~~</th>
<th>~~startprice~~</th>
<th>~~standard~~</th>
<th>~~describe~~</th>
<th>~~location~~</th>
<th>~~number~~</th>
<th>~~sold_number~~</th>


<th>new_old</th>



</tr>";

while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
  $name2 =  $row['pic'];
 echo "<td> <img src=\"$name2\" width='300' height='300'> </td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td>" . $row['startprice'] . "</td>";
 echo "<td>" . $row['size'] . "</td>";
 echo "<td>" . $row['describe'] . "</td>";
 echo "<td>" . $row['location'] . "</td>";
 echo "<td>" . $row['number'] . "</td>";
 echo "<td>" . $row['sold_number'] . "</td>";
 echo "<td>" . $row['new_old'] . "</td>";

 }


mysql_close($con);

?>
