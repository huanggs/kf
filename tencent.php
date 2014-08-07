<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>腾讯</title>
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/top.inc.php'; ?>
<?php include 'include/top_search.inc.php'; ?>
<div class="list_title"></div>
<div id="list">
	<ul>
    <?php
		$perNumber=20; //每页显示的记录数
		$page=@$_GET['page']; //获得当前的页面值
		$count=mysql_query("select count(*) from server WHERE ser_game_developer='腾讯游戏'"); //获得记录总数
		$rs=mysql_fetch_array($count); 
		$totalNumber=$rs[0];
		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
		if (!isset($page)) {
		 $page=1;
		} //如果没有值,则赋值1
		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
		$s_info = mysql_query("SELECT * FROM server WHERE ser_game_developer='腾讯游戏' order by ser_date,ser_time limit $startCount,$perNumber");
		while ($row = mysql_fetch_array($s_info)){
	?>
    	<li>
        <span class="list_game_name"><?=$row['ser_game_name']?></span>
        <span class="list_ser_name"><?=$row['ser_name']?></span>
        <span class="list_date"><?=date("m月d日",strtotime($row['ser_date']))?></span>
        <span class="list_time"><?=date("h:i",strtotime($row['ser_time']))?></span>
        <span class="list_reminder"><img src="images/reminder_s.png" width="50" height="38" /></span>
        <span class="list_type_1"><?=$row['ser_game_vision']?></span>
        <span class="list_type_2"><?=$row['ser_game_type']?></span>
        <span class="list_enter"><a href="<?=$row['ser_website']?>"></a></span>
        <span class="list_opr_co"><?=$row['ser_game_developer']?></span>
        </li>
        <?php
		}
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