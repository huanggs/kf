<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增用户</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/admin_top_qq.inc.php'; ?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php'; ?>
<?php
	$Id = @$_GET['Id'];
	$sql = mysql_query("SELECT * FROM user WHERE Id='$Id'");
	$row = mysql_fetch_array($sql);
?>
	<div id="admin_right">
    <form action="config/insert_user.php" method="post">
    	<p>
    	<label>Id：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="Id" class="kf_form" readonly="readonly"/>
        </p>
    	<p>
    	<label>用 户 名：&nbsp;</label>
        <input type="text" name="user_name" class="kf_form"/>
        </p>
    	<p>
        <label>重设密码：</label>
  		<input type="text" name="user_pwd" class="kf_form">
        </p>
    	<p>
    	<label>平台名称：</label>
  		<input type="text" name="user_plat" class="kf_form">
        </p>
    	<p>
    	<label>平台等级：</label>
  		<select name="user_level" class="kf_form">
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        	<option value="5">5</option>
        </select>
        </p>
    	<p>
    	<label>用 户 组：&nbsp;</label>
  		<select name="user_group" class="kf_form">
        	<option value="运营商">运营商</option>
        	<option value="普通用户">普通用户</option>
        	<option value="管理员">管理员</option>
        </select>
    	<p>
    	<label>电子邮箱：</label>
        <input type="text" name="user_mail" class="kf_form" />
        </p>
    	<p>
    	<label>平台网站：</label>
        <input type="text" name="user_plat_website" class="kf_form" />
        </p>
    	<p>
    	<input type="submit" id="admin_submit" value="" />
        </p>
        </form>
    </div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>