<?php
	include '../config/conn.php'; 
	$q = $_GET['q'];
	if ($q)
		$sql=mysql_query("SELECT * FROM user WHERE user_group='$q'");
	elseif (!$q)
		$sql = mysql_query("SELECT * FROM user");
		
echo '<table width="800" border="1" cellspacing="0" cellpadding="0" id="plat_admin_list">
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
  </tr>';
  ?>
	<?php
		while ($row = mysql_fetch_array($sql)){
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
			echo "</table>";

			mysql_close($con);
?>