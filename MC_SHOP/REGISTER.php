<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 Transitional//EN">
<html><head><title>���ע��</title>
<meta http-equiv=Content-Type content="text/html; charset=gb2312">
<link type="text/css" rel="stylesheet" href="/style/style.css">

</head>
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">
<table align="center">
  <tr>
    <td align="center"><br>
    <font color=royalblue><b>�û�ע��</b></font><br></td>
  </tr>
  <tr>
    <td><table width=500 border=0 align="center" cellPadding=1 cellspacing=1 bordercolor=#003366 bgColor=#cccccc>
  <form name='register' action='../zkx/register.php' method='post' onSubmit="javascript:return CheckForm();">
            <tr bgColor=#ffffff>
              <td width=90 height=50 align=right valign="top">�� �� ����</td>
              <td><div class="enter"><input id=UserID maxLength=20 
            name=UserID onFocus="javascript:GetFocus(1);" onBlur="javascript:checkUserName(this.value);">
                    <font face=���� color=#ff3300>*</font></div><div id="UserName" class="msg">�û�������Ϊ4��20λ������ĸ��ʼ��ĸ��������ɣ����ܰ��������ַ��������Ǻ��֡�һ��ע��ɹ��������޸ġ�</div></td>
            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">��&nbsp;&nbsp;&nbsp;&nbsp;�룺</td>
              <td><div class="enter"><input id=password type=password maxLength=20 
            name=password onBlur="javascript:CheckPassword(this.value);" onFocus="javascript:GetFocus(2);">
                    <font face=���� color=#ff3300>*</font> </div><div id="Pwd" class="msg">�û���������5~15����ĸ(���ִ�Сд)��������ɡ�</div></td>
            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">�ظ����룺</td>
              <td><div class="enter"><input id=Confirm type=password 
            maxLength=20 name=Confirm onBlur="javascript:CheckConfirm(this.value);" onFocus="javascript:GetFocus(3);">
                    <font face=���� color=#ff3300>*</font></div><div id="Confirm_Pwd" class="msg">�뽫��������һ��ȷ��</div></td>
            </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">��&nbsp;&nbsp;&nbsp;&nbsp;����</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=���� 
            color=#ff3300>*</font></div><div id="Nick" class="msg">�ǳƳ���Ϊ4��20�ַ�������Ϊ����</div></td>
            
             </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">	Q&nbsp;&nbsp;&nbsp;&nbsp;Q��</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=���� 
            color=#ff3300>*</font></div><div id="Nic" class="msg">���������QQ��</div></td>
			</tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">	��&nbsp;&nbsp;&nbsp;&nbsp;�䣺</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=���� 
            color=#ff3300>*</font></div><div id="Nic" class="msg">�������������</div></td>
             </tr>
            <tr bgColor=#ffffff>
              <td width=90 height=35 align=right valign="top">	��ϵ�绰��</td>
              <td><div class="enter"><input id=NickName maxLength=40 name=NickName onBlur="javascript:CheckNickName(this.value);" onFocus="javascript:GetFocus(4);">
                    <font face=���� 
            color=#ff3300>*</font></div><div id="Nic" class="msg">�����������ϵ�绰</div></td>
			</form>
			</tr>
            <tr vAlign=center align=middle bgColor=#ffffff>
              <td colSpan=2 height=50> <form name="input" action="registersuccess.php" method="get">
              <input type="submit" value="�ύ" />
			  </form></td>
			 </tr>
	    
		
        </TABLE>
	</td>
  </tr>
</table>
</body>
</html>