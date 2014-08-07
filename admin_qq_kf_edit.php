<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开服表修改</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'include/admin_top_qq.inc.php'; ?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php'; ?>
<?php
	$id = @$_GET['id'];
	$sql = "SELECT * FROM server WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
	<div id="admin_right">
    <form name="new_kf" action="config/update_kf_qq.php" method="post">
    	<p>
        <label>id：</label>
        <input name="Id" type="text" class="kf_form" value="<?php echo $row['Id'];?>" readonly="readonly" />
        </p>
    	<p>
        <label>选 择 游 戏：</label>
  		<select name="ser_game_name" class="kf_form">
        	<option><?php echo $row['ser_game_name'];?></option>
        <?php
		while ($row1 = mysql_fetch_array($g_info)){
			echo "<option>" . $row1['games_name'] . "</option>";
			}
         ?>
    	</select>
        </p>
    	<p>
    	<label>游 戏 类 型：</label>
        <input name="ser_game_type" type="text" class="kf_form" value="<?php echo $row['ser_game_type'];?>" />
        </p>
    	<p>
    	<label>游 戏 画 面：</label>
        <input name="ser_game_vision" type="text" class="kf_form" value="<?php echo $row['ser_game_vision'];?>" />
        </p>
    	<p>
    	<label>运&nbsp;&nbsp;&nbsp;营&nbsp;&nbsp;&nbsp;商：</label>
        <input name="ser_game_developer" type="text" class="kf_form" value="<?php echo $row['ser_game_developer'];?>" />
        </p>
    	<p>
    	<label>新 服 名 称：</label>
        <input name="ser_name" type="text" class="kf_form" value="<?php echo $row['ser_name'];?>" />
        </p>
    	<p>
    	<label>开 服 日 期：</label>
  		<input name="ser_date" type="date" class="kf_form" value="<?php echo $row['ser_date'];?>">
        </p>
    	<p>
    	<label>开 服 时 间：</label>
  		<input name="ser_time" type="time" class="kf_form" value="<?php echo $row['ser_time'];?>">
        </p>
    	<p>
    	<label>进游戏地址：</label>
        <input name="ser_website" type="text" class="kf_form" value="<?php echo $row['ser_website'];?>" />
        </p>
    	<p>
    	<label>通过：</label>
        <input name="hot" type="radio" value="正常" /><br />
    	<label>推荐：</label>
        <input name="hot" type="radio" value="推荐" /><br />
    	<label>关闭：</label>
        <input name="hot" type="radio" value="关闭" /><br />
    	<label>审核中：</label>
        <input name="hot" type="radio" value="审核中" /><br />
        </p>
    	<p>
    	<input type="submit" id="admin_submit" value="" />
        </p>
        </form>
    </div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>