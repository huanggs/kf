<?php
	include "conn.php";
	$insert2reg="INSERT INTO user (user_name,user_pwd,user_group,user_level,user_reg_time,user_mail)
	VALUES
	('$_POST[user_name]','$_POST[user_pwd]','普通用户','0',now(),'$_POST[user_mail]')";
	if (!mysql_query($insert2reg,$con))
		{
		  die('Error: ' . mysql_error());
		}
	
	session_start();
	$_SESSION['cookieeee']="kf2013";
	$user_name = $_POST['user_name'];
	$user_pwd = $_POST['user_pwd'];
	$sql = mysql_query("SELECT * FROM user WHERE user_name='$user_name'");
	$user_info = mysql_fetch_array($sql);
	$_SESSION['user_name']=$user_info['user_name'];
	$_SESSION['user_group']=$user_info['user_group'];
	header("location:../index.php");
?>