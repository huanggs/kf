<?php
	include '../config/conn.php';
	$q = $_GET['q'];
	$perNumber=15; //每页显示的记录数
	$page=@$_GET['page']; //获得当前的页面值
	if (!isset($page)) {
	 $page=1;
	} //如果没有值,则赋值1
	$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
	if ($q):
		$sql = mysql_query("SELECT * FROM games WHERE games_name='$q' limit $startCount,$perNumber");
		$sql_num = mysql_fetch_array(mysql_query("SELECT count(*) FROM games WHERE games_name='$q'"));
	elseif (!$q):
		$sql = mysql_query("SELECT * FROM games order by id DESC limit $startCount,$perNumber");
	endif;
	$totalNumber=$sql_num[0];
	$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
		
echo '<table width="800" border="1" cellspacing="0" cellpadding="0" id="plat_admin_list">
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
  </tr>';
  ?>
  <?php
	while ($row = mysql_fetch_array($sql)){
	?>
		 <tr>
		 <th><?=$row['Id']?></th>
		<td><?=$row['games_lib_id']?></td>
		<td><?=$row['games_name']?></td>
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
    ?>
		</table>
		<div id="admin_page">
		<?php
		if ($page != 1) { //页数不等于1
		?>
		<a href="?q=<?php echo $q;?>?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
		<?php
		}
		for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
		?>
		<a href="?q=<?php echo $q;?>?page=<?php echo $i;?>"><?php echo $i ;?></a>
		<?php
		}
		if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
		?>
		<a href="?q=<?php echo $q;?>?page=<?php echo $page + 1;?>">下一页</a>
		<?php
		} 
		?>
		</div>
		<?php
				mysql_close($con);
		?>