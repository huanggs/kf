<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新服</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
	function ChkPost(){
		if  (new_kf.ser_game_type.value==""){
			alert("请填写游戏类型");
			new_kf.ser_game_type.focus();
			return false;
		}
	}
</script>
<body>
<?php include 'include/admin_top_plat.inc.php'; ?>
<?php
	$auto_plat = $_SESSION['user_name'];
	$p_info = mysql_query("SELECT * FROM user WHERE user_name='$auto_plat'");		//当前运营商的对外名称
	$row2 = mysql_fetch_array($p_info);
	//echo $row2['user_plat'];
?>
<div id="admin_main">
<?php include 'include/admin_left_plat.inc.php'; ?>
	<div id="admin_right">
    <form name="new_kf" action="config/insert_kf.php" method="post" onsubmit="return ChkPost();">
    	<p>
        <label>选 择 游 戏：</label>
  		<select name="ser_game_name" class="kf_form">
        <?php
		while ($row1 = mysql_fetch_array($g_info)){
			echo "<option>" . $row1['games_name'] . "</option>";
			}
         ?>
    	</select>
        </p>
    	<p>
    	<label>游 戏 类 型：</label>
        <input name="ser_game_type" type="text" class="kf_form" />
        </p>
    	<p>
    	<label>游 戏 画 面：</label>
        <input name="ser_game_vision" type="text" class="kf_form" />
        </p>
    	<p>
    	<label>选择运营商：</label>
  		<input name="ser_game_developer" class="kf_form" readonly="readonly" value="<?php echo $row2['user_plat'];?>">
    	</input>
        </p>
    	<p>
    	<label>新 服 名 称：</label>
        <input name="ser_name" type="text" class="kf_form" />
        </p>
    	<p>
    	<label>开 服 日 期：</label>
  		<input name="ser_date" type="date" class="kf_form">
        </p>
    	<p>
    	<label>开 服 时 间：</label>
          <select name="ser_time" class="kf_form">
            <option>选择时间</option>
            <option>09:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>14:00</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>17:00</option>
            <option>18:00</option>
            <option>19:00</option>
            <option>20:00</option>
            <option>21:00</option>
            <option>22:00</option>
          </select>
        </p>
    	<p>
    	<label>进游戏地址：</label>
        <input name="ser_website" type="text" class="kf_form" value="http://" />
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