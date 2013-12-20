<?php
session_start();

//array数组中放图片的格式
$uptypes = array("image/jpg","image/jpeg","image/png","image/pjpeg","image/gif","image/bmp","image/x-png");
$files =$_FILES["uppic"];
if($files["size"]>2097152){    //图片大小判断
echo "上传图片不能大于2M";
echo "<meta http-equiv='REFRESH' CONTENT='1;URL=pic.php'>";
exit;
}
$ftype =$files["type"];
if(!in_array($ftype,$uptypes)){  //图片格式判断
echo "上传的图片文件格式不正确";
echo "<meta http-equiv='REFRESH' CONTENT='1;URL=pic.php'>";
}
$fname = $files["tmp_name"];    //在服务器临时存储名称
$image_info = getimagesize($fname);
$name = $files["name"];
$str_name = pathinfo($name);  //以数组的形式返回文件路劲的信息
$extname = strtolower($str_name["extension"]); //把字符串改为小写 extensiorn扩展名
$upload_dir = "upload/";  //upload文件夹
$file_name = date("YmdHis").rand(1000,9999).".".$extname;
$str_file = $upload_dir.$file_name; //文件目录
//存入数据库
$con=mysql_connect("localhost","root","");
if(!$con){
die(("数据库连接失败").mysql_error());
}
mysql_select_db("mywork",$con);
$sql="update user set picpath='$str_file' where user_name='$username'";  //将图片地址插入数据库mywork  
mysql_query($sql,$con);
mysql_close($con); 
if(!file_exists($upload_dir)){
    mkdir($upload_dir);   //创建目录 成功则返回true 失败则返回flase
}
if(!move_uploaded_file($files["tmp_name"],$str_file)){   //将上传的文件移动到新的目录 要移动文件 和文件新目录 成功则返回true
    echo "图片上传失败";
    echo "<meta http-equiv='REFRESH' CONTENT='1;URL=插入失败后希望跳转的页面>";
}
else{
    //echo "<img src=".$str_file.">";
    echo "图片上传成功";
    echo "<meta http-equiv='REFRESH' CONTENT='1;URL=插入成功希望挑战的页面>";	
}