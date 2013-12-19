<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("languagevote", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];
$sql = "SELECT password FROM guanliyuan WHERE ID='".$temp."';";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
 if(strcasecmp($row['password'],$_GET["p"])==0)
 {
     echo "ok"; 
 }
 else
 {
 echo "bad";
 }
}
?>
