var xmlHttp

function showUser()
{ 
//var u=document.getElementById("users");
var u=reg.ID.value;
var p=reg.name.value;
var b=reg.sortID.value;
var c=reg.price.value;
var d=reg.startprice.value;
var e=reg.describe.value;
var f=reg.number.value;
var g=reg.location.value;
var h=reg.size.value;
var i=reg.new_old.value;
var j=reg.count_price.value;
var k=reg.pic.value;
var l=reg.small_pic.value;
var a=reg.saler.value;
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 	alert ("Browser does not support HTTP Request")
 	return
 }
var url="addgoodso.php"
url=url+"?q="+u+"&p="+p+"&a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h+"&i="+i+"&j="+j+"&k="+k+"&l="+l
url=url+"&sid="+Math.random()

xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(u+p+a+b+c+d+e+f+g+h+i+j+k+l)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 	var myresponse=String(xmlHttp.responseText);
	alert(myresponse);
	if(myresponse== 0)
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