<?php
	include 'config/conn.php';
	session_start();
	if (!isset($_SESSION["cookieeee"])) {
	session_unset();
	session_destroy();
}
?>
<div id="logo">
	<img src="images/logo.jpg" width="314" height="38" />
    <?php
	if(isset($_SESSION['user_name'])):
	?>
    <div id="user_info">
    	<img src="images/new_kf.gif" width="16" height="16" />
        	<?php echo $_SESSION['user_name'];?> 欢迎您！
        	<?php
				if ($_SESSION['user_group']=="运营商"):
					echo "<a href=\"admin_plat_index.php\">进入后台</a>";
             	elseif($_SESSION['user_group']=="管理员"):
					echo "<a href=\"admin_qq_index.php\">进入后台</a>";
             	elseif($_SESSION['user_group']=="普通用户"):
					echo "";
                endif;
			?>
            <a href="logout.php">退出</a>
    </div>
    <?php elseif(!isset($_SESSION['user_name'])): ?>
    <div id="reg_index"><img src="images/new_kf.gif" width="16" height="16" /><a href="reg.php"> 注册</a></div>
    <div id="login_index"><img src="images/new_kf.gif" width="16" height="16" /><a href="login.php"> 登陆</a></div>
    <?php endif;?>
    <div id="fav"><img src="images/fav.gif" width="16" height="16" /> 添加到收藏</div>
</div>
<div id="menu">
	<ul>
    	<li id="today"><a href="index.php"></a></li>
    	<li id="all"><a href="all.php"></a></li>
    	<li id="tencent"><a href="tencent.php"></a></li>
    	<li id="iwan"><a href="#"></a></li>
    	<li id="menu_search"><a href="search.php"></a></li>
    </ul>
</div>