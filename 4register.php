<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 Transitional//EN">
<html><head><title>卖家注册</title>
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
                    <font face=宋体 color=#ff3300>*</font></div><div id="UserName" class="msg">用户名长度为4－20位，以字母开始字母和数字组成，不能包含特殊字符，不能是汉字。一旦注册成功，不能修改。</div></td>
            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
              <td><div class="enter"><input id=password type=password maxLength=20 
            name=password onBlur="javascript:CheckPassword(this.value);" onFocus="javascript:GetFocus(2);">
                    <font face=宋体 color=#ff3300>*</font> </div><div id="Pwd" class="msg">用户的密码由5~15个字母(区分大小写)或数字组成。</div></td>
            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">重复密码：</td>
              <td><div class="enter"><input id=Confirm type=password 
            maxLength=20 name=Confirm onBlur="javascript:CheckConfirm(this.value);" onFocus="javascript:GetFocus(3);">
                    <font face=宋体 color=#ff3300>*</font></div><div id="Confirm_Pwd" class="msg">请将密码再输一遍确认</div></td>
            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">姓&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=宋体 
            color=#ff3300>*</font></div><div id="Nick" class="msg">昵称长度为4－20字符，可以为汉字</div></td>
            
             </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">	Q&nbsp;&nbsp;&nbsp;&nbsp;Q：</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=宋体 
            color=#ff3300>*</font></div><div id="Nic" class="msg">请输入你的QQ号</div></td>
			</tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">	邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=宋体 
            color=#ff3300>*</font></div><div id="Nic" class="msg">请输入你的邮箱</div></td>
             </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">	联系电话：</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=宋体 
            color=#ff3300>*</font></div><div id="Nic" class="msg">请输入你的联系电话</div></td>
			</form>
			</tr>
            <tr vAlign=center align=middle bgColor=#ffffff>
              <td colSpan=2 height=50> <form name="input" action="4registersuccess.php" method="get">
              <input type="submit" value="提交" />
			  </form></td>
			 </tr>
	    
		
        </TABLE>
	</td>
  </tr>
</table>
</body>
</html>
