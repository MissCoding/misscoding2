<?php 
$mysql_server_name='localhost';      //�ĳ��Լ���mysql���ݿ������ip��ַ
$mysql_username='root';                  //�ĳ��Լ���mysql���ݿ��û���
$mysql_password='mysql';        //�ĳ��Լ���mysql���ݿ�����
$mysql_database='langugevote';        //�ĳ��Լ���mysql���ݿ���

$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); 
$sql='CREATE DATABASE languagevote DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci; 
'; 
mysql_query($sql); 
$sql='CREATE TABLE `dyn` (`id` char(10) UNSIGNED NOT NULL AUTO_INCREMENT ,`password` char(10) UNSIGNED NOT NULL DEFAULT 0,PRIMARY KEY ( `id` ) ) TYPE = innodb;'; 
mysql_select_db($mysql_database,$conn); 
$result=mysql_query($sql); 
//echo $sql; 
mysql_close($conn); 
echo "the mysql !���ݿ�mycounter�Ѿ��ɹ�������"; 

?>