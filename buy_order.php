<?php
ini_set("display_errors", "Off");
$temp=$_GET["q"];
$temp1=$_GET["p"];
$temp2=$_GET["a"];
$temp3=$_GET["b"];
$temp4=$_GET["c"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("languagevote", $con);

$result=mysql_query( "INSERT INTO ord VALUES ('".$temp."','".$temp2."','".$temp1."','".$temp4."','".$temp3."')");

$sql="SELECT * FROM goods WHERE ID = '".$temp3."'";
$result2 = mysql_query($sql);

while($row = mysql_fetch_array($result2))
{
     $name1 =  $row['number'];
	 $name2 =  $row['sold_number'];
}
     $name3 =  $name1 - 1;
	 $name4 =  $name2 + 1;

//$result3=mysql_query( "UPDATE goods SET number='".$name3."' and  sold_number='".$name4."' where ID = '".$temp3."'");
//$result3=mysql_query( "UPDATE goods SET number='".$name3."' and  sold_number='".$name4."' where ID = '".$temp3."'");
$result3=mysql_query( "UPDATE goods SET number='".$name3."', sold_number='".$name4."' where ID = '".$temp3."'");
echo 0;
?>
