<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 Transitional//EN">
<html><head><title>卖家登陆</title>
<meta http-equiv=Content-Type content="text/html; charset=gb2312">
<link type="text/css" rel="stylesheet" href="/style/style.css">

</head>
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">
<table align="center">
  <tr>
    <td align="center"><br>
    <font color=royalblue><b>用户注册</b></font><br></td>
  </tr>
  <tr>
    <td><table width=500 border=0 align="center" cellPadding=1 cellspacing=1 bordercolor=#003366 bgColor=#cccccc>
  <form name='register' action='register.php' method='post' onSubmit="javascript:return CheckForm();">
            <tr bgColor=#ffffff>
              <td width=90 height=50 align=right valign="top">用 户 名：</td>
              <td><div class="enter"><input id=UserID maxLength=20 
            name=UserID onFocus="javascript:GetFocus(1);" onBlur="javascript:checkUserName(this.value);">

            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
              <td><div class="enter"><input id=password type=password maxLength=20 
            name=password onBlur="javascript:CheckPassword(this.value);" onFocus="javascript:GetFocus(2);">

			</form>
			</tr>
            <tr vAlign=center align=middle bgColor=#ffffff>
              <td colSpan=2 height=50> <form name="input" action="4index1.php" method="get">
              <input type="submit" value="登录" />
			  </form></td>
			 </tr>
	    
		
        </TABLE>
	</td>
  </tr>
</table>
</body>
</html>
