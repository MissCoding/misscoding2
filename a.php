<?php 
$mysql_server_name='localhost';      //改成自己的mysql数据库服务器ip地址
$mysql_username='root';                  //改成自己的mysql数据库用户名
$mysql_password='mysql';        //改成自己的mysql数据库密码
$mysql_database='langugevote';        //改成自己的mysql数据库名

$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); 
$sql='CREATE DATABASE languagevote DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci; 
'; 
mysql_query($sql); 
$sql='CREATE TABLE `dyn` (`id` char(10) UNSIGNED NOT NULL AUTO_INCREMENT ,`password` char(10) UNSIGNED NOT NULL DEFAULT 0,PRIMARY KEY ( `id` ) ) TYPE = innodb;'; 
mysql_select_db($mysql_database,$conn); 
$result=mysql_query($sql); 
//echo $sql; 
mysql_close($conn); 
echo "the mysql !数据库mycounter已经成功建立！"; 

?>