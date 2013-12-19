var xmlHttp

function showUser()
{ 
//var u=document.getElementById("users");
var u=guanliyuan.ID.value;
//document.write(u);
var p=guanliyuan.password.value;
//document.write(p);
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="judge.php"
url=url+"?q="+u+"&p="+p
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 var myresponse=String(xmlHttp.responseText);

if(myresponse=='ok')
{
//document.write(myresponse);
alert( myresponse);
window.location.href="teacher.php";
}
else
{
	alert( myresponse);
window.location.href="tregister.php";
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