<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/login_top.inc.php'; ?>
<div id="login">
<div id="login_main">
    <form action="config/login_deal.php" method="post">
        <p>
        <label>Q Q</label><input name="user_name" type="text" id="login_user" />
        </p>
        <p>
        <label>密码</label><input name="user_pwd" type="password" id="login_psw" />
        </p>
        <p>
        <input type="submit" id="login_submit" value="" />
         </p>
    </form>
</div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>
