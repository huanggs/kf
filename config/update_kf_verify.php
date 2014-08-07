<?php
	include "conn.php";
	$update2kf="UPDATE server SET 		
	hot='正常'
	WHERE id=$_GET[id]";
	if (!mysql_query($update2kf,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	  else {header('Location: ../admin_qq_kf_verify.php');}
?>