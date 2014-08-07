<?php
	include 'config/conn.php'; 
	session_start();
	if (!isset($_SESSION["cookieeee"])) {
	session_unset();
	session_destroy();
	}
	if ($_SESSION['user_group'] == '管理员'):
	elseif($_SESSION['user_group'] == '运营商'):
	elseif($_SESSION['user_group'] == '普通用户'):
		header("location:index.php");
	else:
		header("location:index.php");
	endif;
?>
<div id="admin_top">
	<div id="admin_logo"></div>
	<div id="admin_top_right"><?php echo $_SESSION['user_name'];?> <a href="admin_qq_index.php" target="_self">切换到QQ</a> <a href="admin_plat_index.php" target="_self">切换到运营商</a> <a href="index.php" target="_self">首页</a> <a href="logout.php" target="_self">退出</a></div>
</div>