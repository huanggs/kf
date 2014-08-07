<?php
	include "conn.php";
	$update2kf="UPDATE server SET 		
	ser_game_name='$_POST[ser_game_name]',
	ser_game_type='$_POST[ser_game_type]',
	ser_game_vision='$_POST[ser_game_vision]',
	ser_game_developer='$_POST[ser_game_developer]',
	ser_name='$_POST[ser_name]',
	ser_date='$_POST[ser_date]',
	ser_time='$_POST[ser_time]',
	ser_website='$_POST[ser_website]',
	sub_time=now(),
	hot='$_POST[hot]'
	WHERE id=$_POST[Id]";
	if (!mysql_query($update2kf,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	  else {header('Location: ../admin_qq_kf_list.php');}
?>