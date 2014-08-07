<?php
	include "conn.php";
	$update2user="UPDATE user SET
	user_name='$_POST[user_name]',
	user_pwd='$_POST[user_pwd]',
	user_plat='$_POST[user_plat]',
	user_level='$_POST[user_level]',
	user_plat_website='$_POST[user_plat_website]',
	user_mail='$_POST[user_mail]',
	user_last_time=now()
	WHERE Id='$_POST[Id]'";
	if (!mysql_query($update2user,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	  else {header('Location: ../admin_qq_user_manage.php');}
?>