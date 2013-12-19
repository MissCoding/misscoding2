var xmlHttp

function showUser()
{ 
//var u=document.getElementById("users");
var u=deng.userid.value;
var p=deng.password.value;
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 	alert ("Browser does not support HTTP Request")
 	return
 }
var url="dengluo.php"
url=url+"?q="+u+"&p="+p
url=url+"&sid="+Math.random()

xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(u+p)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 	var myresponse=String(xmlHttp.responseText);
	alert(myresponse);
	if(myresponse=='ok')
	{
	window.location.href="index1.php";
	}
	else
	{
	window.location.href="denglu.php";
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