var xmlHttp

function showUser()
{ 
//var u=document.getElementById("users");
var u=reg.number.value;
var p=reg.saler.value;
var a=reg.customer.value;

var b=reg.goods.value;
var c=reg.time.value;
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 	alert ("Browser does not support HTTP Request")
 	return
 }
var url="buy_order.php"
url=url+"?q="+u+"&p="+p+"&a="+a+"&b="+b+"&c="+c
url=url+"&sid="+Math.random()

xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(u+p+a+b+c)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 	var myresponse=String(xmlHttp.responseText);
	alert(myresponse);
	if(myresponse==0)
	{
	window.location.href="4index1.php";
	}
	else
	{
	window.location.href="4index1.php";
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