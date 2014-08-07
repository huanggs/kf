<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
	function Chk_reg(){
		if (document.reg.user_name.value==""){
			alert('用户名不能为空！');
			document.reg.user_name.focus();
			return false;
			}
		else if(document.reg.user_pwd.value!=document.reg.user_pwd2.value){			
			alert('两次密码不一致！');
			document.reg.user_pwd.focus();
			return false;
			}
		else if(document.reg.user_mail.value==""){			
			alert('邮箱地址不能为空！');
			document.reg.user_mail.focus();
			return false;
			}
		}
</script>
<body>
<div id="admin_top">
	<div id="admin_logo"></div>
	<div id="admin_top_right"></div>
</div>
<div id="login">
<div id="login_main">
	<form name="reg" method="post" action="config/insert_reg.php">
	<p>
	<label>Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q</label><input name="user_name" type="text" id="login_user" />
    </p>
	<p>
	<label>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label><input name="user_pwd" type="password" id="login_psw" />
    </p>
	<p>
	<label>重复密码</label><input name="user_pwd2" type="password" id="login_psw" />
    </p>
	<p>
	<label>邮箱地址</label><input name="user_mail" type="text" id="login_psw" />
    </p>
    <p>
    <input name="submit" type="submit" id="login_submit" value="" onclick="return Chk_reg();" />
     </p>
     </form>
</div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>
