<?php
	$con = mysql_connect ("localhost","root","root");
	mysql_query("set names 'utf8'");
	if (!$con)
	{
		die ('数据库连接失败'.mysql_error());
	}
	mysql_select_db('kf', $con);
	//日期数据
		$today = date('Y-m-d',strtotime('today'));
		$yesterday = date('Y-m-d',strtotime('today -1day'));
		$byday = date('Y-m-d',strtotime('today -2day'));
		$tomorrow = date('Y-m-d',strtotime('today +1day'));
		$thirdday = date('Y-m-d',strtotime('today +2day'));
	//全局查询语句
		$g_info = mysql_query("SELECT * FROM games");	//游戏信息
		$ser_count_num=mysql_fetch_array(mysql_query("SELECT count(*) FROM server"));
		$ser_count_t_num=mysql_fetch_array(mysql_query("SELECT count(*) FROM server WHERE ser_date='$today'"));
		$ser_count_t_num=mysql_fetch_array(mysql_query("SELECT count(*) FROM server WHERE hot='审核中'"));
		$game_count_num=mysql_fetch_array(mysql_query("SELECT count(*) FROM games"));
		$plat_count_num=mysql_fetch_array(mysql_query("SELECT count(*) FROM user WHERE user_group='运营商'"));
		$user_count_num=mysql_fetch_array(mysql_query("SELECT count(*) FROM user WHERE user_group='普通用户'"));
		
	//首页查询语句
		$s_h_info = mysql_query("SELECT * FROM server WHERE hot='推荐' and ser_date='$today' ORDER BY ser_date,ser_time"); //首页10条推荐开服
		$s_info = mysql_query("SELECT * FROM server WHERE ser_date='$today' ORDER BY ser_date,ser_time"); 
		//首页50条当天开服	（WFD(waiting for develop)：当天功能）
		
	//搜索页查询语句
		
	//运营商后台查询语句
	//管理员后台查询语句
?>