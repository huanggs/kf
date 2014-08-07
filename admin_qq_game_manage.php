<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>游戏管理</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
<script src="js/Show_game.js"></script>
<script src="js/Normal.js"></script>
</head>

<body>
<?php include 'include/admin_top_qq.inc.php';?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php';?>
	<div id="admin_right">
	<form method="get" action="">
		<input type="text" name="g_n" id="g_m_input" class="kf_form" value="输入游戏名称" onfocus="SetInputNull2()" />
        <input type="submit" id="search_a_btn" value=""/>
	</form>
	<div id="txtHint">
<table width="800" border="1" cellspacing="0" cellpadding="0" id="plat_admin_list">
  <tr>
    <th>ID</th>
    <th>产品库ID</th>
    <th>游戏名称</th>
    <th>首字母</th>
    <th>介绍</th>
    <th>类型</th>
    <th>界面</th>
    <th>测试状态</th>
    <th>开发公司</th>
    <th>录入时间</th>
    <th>管理操作</th>
  </tr>
  <?php
		$perNumber=15; //每页显示的记录数
		$page=@$_GET['page']; //获得当前的页面值
		$g_n=@$_GET['g_n'];
		$totalNumber=$game_count_num[0];
		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
		if (!isset($page)) {
		 $page=1;
		} //如果没有值,则赋值1
		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
		if(!$g_n):
			$s_info = mysql_query("SELECT * FROM games order by id DESC limit $startCount,$perNumber");
		elseif($g_n):
			$s_info = mysql_query("SELECT * FROM games WHERE games_name='$g_n' order by id DESC limit $startCount,$perNumber");
		endif;
		while ($row = mysql_fetch_array($s_info)){
			?>
			 <tr>
             <th><?=$row['Id']?></th>
			<td><?=$row['games_lib_id']?></td>
			<td><a href="admin_qq_game_manage.php?g_n=<?=$row['games_name']?>"><?=$row['games_name']?></a></td>
			<td><?=$row['games_letter']?></td>
			<td><img src="images/new_kf.gif" width="16" height="15" title="<?=$row['games_des']?>" /></td>
			<td><?=$row['games_type']?></td>
			<td><?=$row['games_vision']?></td>
			<td><?=$row['games_test']?></td>
			<td><?=$row['games_developer']?></td>
			<td><?=$row['games_sub_time']?></td>
			<td><a href="admin_qq_game_edit.php?Id=<?=$row['Id']?>">修改</a></td>
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
</div>

    </div>
</div>
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>
