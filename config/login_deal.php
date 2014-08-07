<?php
	include 'conn.php';
	
	session_start();
	$_SESSION['cookieeee']="kf2013";
	$user_name = $_POST['user_name'];
	$user_pwd = $_POST['user_pwd'];
	$sql = mysql_query("SELECT * FROM user WHERE user_name='$user_name'");
	$user_info = mysql_fetch_array($sql);
	$_SESSION['user_name']=$user_info['user_name'];
	$_SESSION['user_group']=$user_info['user_group'];
	
	if ($user_pwd == $user_info['user_pwd'] && $user_info['user_group']=='普通用户'):
		header("location:../index.php");
	elseif ($user_pwd == $user_info['user_pwd'] && $user_info['user_group']=='运营商'):
		header("location:../admin_plat_index.php");
	elseif ($user_pwd == $user_info['user_pwd'] && $user_info['user_group']=='管理员'):
		header("location:../admin_qq_index.php");
	else:
		header("location:../login.php");
	endif;
	
	if ($user_pwd !== $user_info['user_pwd'] || $user_name !==$user_info['user_name']):
		session_unset();
		session_destroy();
		endif;
?>