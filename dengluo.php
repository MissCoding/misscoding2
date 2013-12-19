<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("languagevote", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];
$result = mysql_query("SELECT password FROM customer WHERE username='".$temp."'");
while($row = mysql_fetch_array($result))
  {
 if(strcasecmp($row['password'],$temp1)==0)
 {
     echo "ok"; 
 }
 else
 {
 echo "bad";
 }
}
?>
