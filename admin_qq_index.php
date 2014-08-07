<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QQ admin index</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/admin_top_qq.inc.php'; ?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php'; ?>
	<div id="admin_right">
    	<p>
    	<label>游戏数量：</label><?php echo $game_count_num[0];?>
        </p>
    	<p>
    	<label>运营商数量：</label><?php echo $plat_count_num[0];?>
        </p>
    	<p>
    	<label>普通用户数量：</label><?php echo $user_count_num[0];?>
        </p>
    	<p>
    	<label>已录入开服数量：</label><?php echo $ser_count_num[0];?>
        </p>
    	<p>
    	<label>今日开服数量：</label><?php echo $ser_count_t_num[0];?>
        </p>
    </div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>
