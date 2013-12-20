
<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("languagevote", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];
$temp2=$_GET["a"];
$temp3=$_GET["b"];

$result=mysql_query( "INSERT INTO donate VALUES ('".$temp."','".$temp1."','".$temp2."','".$temp3."')");
echo "0";
?>
