<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索</title>
<link href="css/kf.css" rel="stylesheet" type="text/css" />
<link href="css/search.css" rel="stylesheet" type="text/css" />
<script src="js/Normal.js"></script>
</head>
<body>
<?php include 'include/top.inc.php'; ?>
<div id="search">
    <form name="search_main" method="get" action="">
        <input id="search_a" name="search_a" type="text" value="输入游戏或平台名称" onfocus="SetInputNull()" onblur="SetInputDefault()" />
        <input type="submit" id="search_a_btn" value="" />
    </form>
</div>
<?php include 'include/search_menu.inc.php'; ?>

<!-- 搜索结果列表 -->

<div class="list_title"></div>
<div id="list_all">
	<ul>
    <?php
		$perNumber=20; //每页显示的记录数
		$page=@$_GET['page']; //获得当前的页面值
		$search_a = @$_GET['search_a']; //获得搜索值
		$s_g_n = @$_GET['s_g_n'];
		$s_g_d = @$_GET['s_g_d'];
		$s_d = "2013-" . @$_GET['s_d'];
		$s_t = @$_GET['s_t'] . ":00";
		$s_g_t = @$_GET['s_g_t'];
		$s_g_v = @$_GET['s_g_v'];
		$count=mysql_query("SELECT count(*) FROM server WHERE ser_game_name like '%$search_a%' or ser_game_developer like '%$search_a%'"); //获得记录总数
		$rs=mysql_fetch_array($count); 
		$totalNumber=$rs[0];
		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
		if (!isset($page)) {
		 $page=1;
		} //如果没有值,则赋值1
		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
		$sql = mysql_query("SELECT * FROM server WHERE ser_game_name like '%$search_a%' or ser_game_developer like '%$search_a%' order by ser_date,ser_time");
		$sql2 = mysql_query("SELECT * FROM server WHERE ser_game_name like '%$s_g_n%' and ser_game_developer like '%$s_g_d%' and ser_game_type like '%$s_g_t%' and ser_date like '%$s_d%' and ser_time like '%$s_t%' and ser_game_vision like '%$s_g_v%' order by ser_date,ser_time");
		if ($search_a):
			while ($row = mysql_fetch_array($sql)){
	?>
		<?php include 'include/list.inc.php'; ?>
        <?php
            }
		?>
        <?php
		elseif ($s_g_n || $s_g_d || $s_d || $s_t || $s_g_t):
			while ($row = mysql_fetch_array($sql2)){
		?>
		<?php include 'include/list.inc.php'; ?>
        <?php
            }
			endif;
		?>
    </ul>
</div>
<div id="page">
	<?php
    if ($page != 1) { //页数不等于1
    ?>
    <a href="?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
    <?php
    }
    for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
    ?>
    <a href="?page=<?php echo $i;?>"><?php echo $i ;?></a>
    <?php
    }
    if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
    ?>
    <a href="?page=<?php echo $page + 1;?>">下一页</a>
    <?php
    } 
    ?>
</div>
</body>
</html>
