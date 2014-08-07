<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/kf.css" rel="stylesheet" type="text/css" />
<script src="js/SelectUser.js"></script>
</head>

<body>
<?php include 'include/admin_top_qq.inc.php'; ?>
<div id="admin_main">
<?php include 'include/admin_left_qq.inc.php'; ?>
<?php
		$perNumber=15; //每页显示的记录数
		$page=@$_GET['page']; //获得当前的页面值
		$totalNumber=$plat_count_num[0];
		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
		if (!isset($page)) {
		 $page=1;
		} //如果没有值,则赋值1
		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
?>
	<div id="admin_right">
         <select name="" type="text" class="kf_form" onchange="showUser(this.value)" />
         	<option value="">全部用户</option>
         	<option value="运营商">运营商</option>
         	<option value="普通用户">普通用户</option>
         	<option value="管理员">管理员</option>
         </select>
         <div id="txtHint">
<table width="800" border="1" cellspacing="0" cellpadding="0" id="plat_admin_list">
  <tr>
    <th>ID</th>
    <th>用户名</th>
    <th>用户组</th>
    <th>名称</th>
    <th>官网</th>
    <th>级别</th>
    <th>E-MAIL</th>
    <th>录入时间</th>
    <th>管理操作</th>
  </tr>
  <?php
  		$s_info = mysql_query("SELECT * FROM user order by id DESC limit $startCount,$perNumber");
		while ($row = mysql_fetch_array($s_info)){
			?>
			 <tr>
             <th><?=$row['Id']?></th>
			<td><?=$row['user_name']?></td>
			<td><?=$row['user_group']?></td>
			<td><?=$row['user_plat']?></td>
			<td><a href="<?=$row['user_plat_website']?>" target="_blank"><img src="images/home_icon.gif" width="16" height="15" alt="" /></a></td>
			<td><?=$row['user_level']?></td>
			<td><?=$row['user_mail']?></td>
			<td><?=$row['user_reg_time']?></td>
			<td><a href="admin_qq_user_edit.php?Id=<?=$row['Id']?>">修改</a></td>
            </tr>
            <?php
		}
		mysql_close($con);
  ?>
</table>
</div>
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
<div style="clear:both;"></div>
<div id="admin_footer"></div>
</body>
</html>
