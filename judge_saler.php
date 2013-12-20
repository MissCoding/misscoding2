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
while($row = mysql_fetch_array($result))
 {
  $saler  =  $row['saler'];
   }
$sqlp ="SELECT * FROM saler WHERE username='".$saler."'";
$result = mysql_query($sqlp);
echo "<table border='1'>
<tr>
<th>~~~~~~name~~~~~~</th>
<th>~~~~~~phone~~~~~~</th>
<th>~~~~~~email~~~~~~</th>
<th>~~~~~~qq~~~~~~</th>

</tr>";

while($row1 = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row1['name'] . "</td>";
 echo "<td>" . $row1['phone'] . "</td>";
 echo "<td>" . $row1['email'] . "</td>";
 echo "<td>" . $row1['qq'] . "</td>";
 }

mysql_close($con);

?>
