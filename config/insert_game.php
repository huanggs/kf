<?php
	include "conn.php";
	$insert2games="INSERT INTO games (games_lib_id,games_name,games_letter,games_des,games_type,games_vision,games_test,games_developer,games_sub_time)
	VALUES
	('$_POST[games_lib_id]','$_POST[games_name]','$_POST[games_letter]','$_POST[games_des]','$_POST[games_type]','$_POST[games_vision]','$_POST[games_test]','$_POST[games_developer]',now())";
	if (!mysql_query($insert2games,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	  else {header('Location: ../admin_qq_game_manage.php');}
?>