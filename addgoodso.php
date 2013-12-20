
<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("languagevote", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];
$temp2=$_GET["b"];
$temp3=$_GET["c"];
$temp4=$_GET["d"];
$temp5=$_GET["e"];
$temp6=$_GET["f"];
$temp7=0;
$temp8=0;
$temp9=$_GET["g"];
$temp10=$_GET["h"];
$temp11=$_GET["i"];
$temp12=$_GET["j"];
$temp13=$_GET["k"];
$temp14=$_GET["l"];
$temp15=$_GET["a"];

$result=mysql_query( "INSERT INTO goods VALUES ('".$temp."','".$temp1."','".$temp2."','".$temp3."','".$temp4."','".$temp5."','".$temp6."','".$temp7."','".$temp8."','".$temp9."','".$temp10."','".$temp11."','".$temp12."','".$temp13."','".$temp14."','".$temp15."')");
echo "0";
?>

