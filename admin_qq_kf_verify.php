<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开服表审核</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/admin_top_qq.inc.php'; ?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php'; ?>
	<div id="admin_right">
         <input name="" type="text" class="kf_form" value="输入游戏名称" /><input type="button" id="plat_admin_list_button" value=" "/>
<table width="800" border="1" cellspacing="0" cellpadding="0" id="plat_admin_list">
  <tr>
    <th>ID</th>
    <th>游戏名称</th>
    <th>运营商</th>
    <th>新服名称</th>
    <th>开服日期</th>
    <th>开服时间</th>
    <th>官网</th>
    <th>录入时间</th>
    <th>状态</th>
    <th>管理操作</th>
  </tr>
  <?php
		$perNumber=15; //每页显示的记录数
		$page=@$_GET['page']; //获得当前的页面值
		$totalNumber=$ser_count_num[0];
		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
		if (!isset($page)) {
		 $page=1;
		} //如果没有值,则赋值1
		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
  		$s_info = mysql_query("SELECT * FROM server WHERE hot='审核中' order by id DESC limit $startCount,$perNumber");
		while ($row = mysql_fetch_array($s_info)){
			?>
			 <tr>
             <th><?=$row['Id']?></th>
			<td><?=$row['ser_game_name']?></td>
			<td><?=$row['ser_game_developer']?></td>
			<td><?=$row['ser_name']?></td>
			<td>
			<?php
		if ($row['ser_date']==$today):
		echo "<font color=\"#FF0000\">今天</font>";
		elseif ($row['ser_date']==$tomorrow):
		echo "明天";
		elseif ($row['ser_date']==$thirdday):
		echo "后天";
		elseif ($row['ser_date']==$yesterday):
		echo "昨天";
		elseif ($row['ser_date']==$byday):
		echo "前天";
		elseif ($row['ser_date']!==$today):
		echo date('m-j',strtotime($row['ser_date']));
		endif;
			?>
        </td>
			<td><?=$row['ser_time']?></td>
			<td><a href="<?=$row['ser_website']?>"><img src="images/home_icon.gif" width="16" height="15" /></a></td>
			<td><?=$row['sub_time']?></td>
			<td><span style="color:#06F;"><?=$row['hot']?></span></td>
			<td><a href="config/update_kf_verify.php?id=<?=$row['Id']?>">通过</a></td>
            </tr>
            <?php
		}
		mysql_close($con);
  ?>
</table>
    <div id="admin_page">
    <?php
    if ($page != 1) { //页数不等于1
    ?>
    <a href="admin_qq_kf_list.php?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
    <?php
    }
    for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
    ?>
    <a href="admin_qq_kf_list.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
    <?php
    }
    if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
    ?>
    <a href="admin_qq_kf_list.php?page=<?php echo $page + 1;?>">下一页</a>
    <?php
    } 
    ?>
    </div>

    </div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>
