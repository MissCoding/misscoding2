<?php 

$myServer = localhost; //主机
$myUser = root; //用户名
$myPass = mysql; //密码
$myDB = languagevote;  //MSSQL库名

$s = @mssql_connect($myServer, $myUser, $myPass)
or die(Couldnt connect to SQL Server on $myServer); 

$d = @mssql_select_db($myDB, $s) 
or die(Couldnt open database $myDB); 

$query = SELECT TitleOfCourtesy+ +FirstName+ +LastName AS Employee ; 
$query .= FROM Employees ; 
$query .= WHERE Country=USA AND Left(HomePhone, 5) = (206); 

$result = mssql_query($query); 
$numRows = mssql_num_rows($result); 

echo <h1> . $numRows . Row . ($numRows == 1 ? : s) . Returned </h1>; 

while($row = mssql_fetch_array($result)) 
{ 
echo <li> . $row[Employee] . </li>; 
} 

?> 