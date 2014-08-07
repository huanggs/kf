<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>游戏修改</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/admin_top_qq.php'; ?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php'; ?>
<?php
	$id = @$_GET['Id'];
	$sql = mysql_query("SELECT * FROM games WHERE Id='$id'");
	$row = mysql_fetch_array($sql);
?>
	<div id="admin_right">
      <form action="config/update_game_qq.php" method="post">
    	<p><label>ID：</label><input type="text" name="Id" class="kf_form" value="<?php echo $row['Id'];?>" readonly="readonly" /></p>
    	<p><label>产品库ID：</label><input type="text" name="games_lib_id" class="kf_form" value="<?php echo $row['games_lib_id'];?>" /></p>
    	<p><label>游戏名称</label><input type="text" name="games_name" class="kf_form" value="<?php echo $row['games_name'];?>"></p>
    	<p><label>首 字 母：</label><input type="text" name="games_letter" class="kf_form" value="<?php echo $row['games_letter'];?>"></p>
    	<p><label>介 绍：</label><input type="text" name="games_des" class="kf_form" value="<?php echo $row['games_des'];?>"></p>
    	<p><label>类 型：</label><input type="text" name="games_type" class="kf_form" value="<?php echo $row['games_type'];?>" /></p>
    	<p><label>画 面：</label><input type="text" name="games_vision" class="kf_form" value="<?php echo $row['games_vision'];?>" /></p>
    	<p><label>测试状态：</label><input type="text" name="games_test" class="kf_form" value="<?php echo $row['games_test'];?>" /></p>
    	<p><label>开 发 商：</label><input type="text" name="games_developer" class="kf_form" value="<?php echo $row['games_developer'];?>" /></p>
    	<p><input type="submit" id="admin_submit" value="" /></p>
      </form>
    </div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>