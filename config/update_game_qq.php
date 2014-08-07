<?php
	include "conn.php";
	$update2game="UPDATE games SET 		
	games_lib_id='$_POST[games_lib_id]',
	games_name='$_POST[games_name]',
	games_letter='$_POST[games_letter]',
	games_des='$_POST[games_des]',
	games_type='$_POST[games_type]',
	games_vision='$_POST[games_vision]',
	games_test='$_POST[games_test]',
	games_developer='$_POST[games_developer]',
	games_sub_time=now()
	WHERE id=$_POST[Id]";
	if (!mysql_query($update2game,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	  else {header('Location: ../admin_qq_game_manage.php');}
?>