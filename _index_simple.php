<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网页游戏开服表_腾讯游戏频道</title>
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'config/conn.php'; ?>
<?php include 'include/top.inc.php'; ?>
<div id="search">
	<input id="search_a" type="text" value="输入游戏或平台名称" />
      <input type="button" id="search_a_btn" />
      <select name="select" id="search_game_name">
            <option>选择游戏名称</option>
         </select>
      <select name="select" id="opr_co">
            <option>选择运营商</option>
        </select>
      <select name="select" id="date">
            <option>选择日期</option>
        </select>
      <select name="select" id="time">
            <option>选择时间</option>
        </select>
      <select name="select" id="type">
            <option>选择类型</option>
        </select>
      <input type="button" id="search_b" />
</div>
<div id="hot_list">
	<ul>
    <?php
		$s_h_info = mysql_query("SELECT * FROM server WHERE hot='推荐' order by ser_date,ser_time limit 10");
		while ($row = mysql_fetch_array($s_h_info)){
	?>
    	<li>
        <span class="list_game_name"><?=$row['ser_game_name']?></span>
        <span class="list_ser_name"><?=$row['ser_name']?></span>
        <span class="list_date"><?=date("n月j日",strtotime($row['ser_date']))?></span>
        <span class="list_time"><?=date("G:i",strtotime($row['ser_time']))?></span>
        <span class="list_reminder"><img src="images/reminder_s.png" /></a></span>
        <span class="list_type_1"><?=$row['ser_game_vision']?></span>
        <span class="list_type_2"><?=$row['ser_game_type']?></span>
        <span class="list_enter"><a href="http://<?=$row['ser_website']?>"></a></span>
        <span class="list_opr_co"><?=$row['ser_game_developer']?></span>
        </li>
        <?php
		}
		?>
    </ul>
</div>
<div id="list">
	<ul>
    <?php
		$s_h_info = mysql_query("SELECT * FROM server order by ser_date,ser_time");
		while ($row = mysql_fetch_array($s_h_info)){
	?>
    	<li>
        <span class="list_game_name"><?=$row['ser_game_name']?></span>
        <span class="list_ser_name"><?=$row['ser_name']?></span>
        <span class="list_date"><?=date("m月d日",strtotime($row['ser_date']))?></span>
        <span class="list_time"><?=date("G:i",strtotime($row['ser_time']))?></span>
        <span class="list_reminder"><img src="images/reminder_s.png" style="border:0px;"/></span>
        <span class="list_type_1"><?=$row['ser_game_vision']?></span>
        <span class="list_type_2"><?=$row['ser_game_type']?></span>
        <span class="list_enter"><a href="http://<?=$row['ser_website']?>"></a></span>
        <span class="list_opr_co"><?=$row['ser_game_developer']?></span>
        </li>
        <?php
		}
		?>
    </ul>
</div>
<?php include 'include/footer.inc.php'; ?>
</body>
</html>