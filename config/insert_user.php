<?php
	include "conn.php";
	$insert2user="INSERT INTO user (user_name,user_pwd,user_plat,user_plat_website,user_mail,user_group,user_level,user_reg_time)
	VALUES
	('$_POST[user_name]','$_POST[user_pwd]','$_POST[user_plat]','$_POST[user_plat_website]','$_POST[user_mail]','$_POST[user_group]','$_POST[user_level]',now())";
	if (!mysql_query($insert2user,$con))
		{
		  die('Error: ' . mysql_error());
		}
	  else
		{
		  echo "提交成功";
		  header('Location: ../admin_qq_user_manage.php');
		}
?>