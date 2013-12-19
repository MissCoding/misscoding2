var xmlHttp

function showUser()
{ 
//var u=document.getElementById("users");
var u=reg.userid.value;
var p=reg.password.value;
var a=reg.tel.value;
var b=reg.email.value;
var c=reg.QQname.value;
var d=reg.nickname.value;
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 	alert ("Browser does not support HTTP Request")
 	return
 }
var url="zhuceo4.php"
url=url+"?q="+u+"&p="+p+"&a="+a+"&b="+b+"&c="+c+"&d="+d
url=url+"&sid="+Math.random()

xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(u+p+a+b+c+d)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 	var myresponse=String(xmlHttp.responseText);
	alert(myresponse);
	if(myresponse=='ok')
	{
	window.location.href="4registersuccess.php";
	}
	else
	{
	window.location.href="regis4.php";
	}
// document.getElementById("txtHint").innerHTML=xmlHttp.responseText  
 
  }
  return false;
}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}