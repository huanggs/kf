<?php
	include "conn.php";
	$insert2kf="INSERT INTO server (ser_game_name,ser_game_type,ser_game_vision,ser_game_developer,ser_name,ser_date,ser_time,ser_website,sub_time,hot)
	VALUES
	('$_POST[ser_game_name]','$_POST[ser_game_type]','$_POST[ser_game_vision]','$_POST[ser_game_developer]','$_POST[ser_name]','$_POST[ser_date]','$_POST[ser_time]','$_POST[ser_website]',now(),'审核中')";
	if (!mysql_query($insert2kf,$con))
		{
		  die('Error: ' . mysql_error());
		}
	  else
		{
		  echo "提交成功";
		  header('Location: ../admin_plat_new_kf.php');
		}
?>