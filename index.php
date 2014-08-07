<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link href="css/kf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'include/top.inc.php'; ?>
<?php include 'include/top_search.inc.php'; ?>
<div class="list_title"></div>
<div id="hot_list">
	<ul class="clearfix">
    <?php
		while ($row = mysql_fetch_array($s_h_info)){
			include 'include/hot_list.inc.php';
        }
	?>
    </ul>
</div>
<div id="list">
	<ul>
    <?php
    	while ($row = mysql_fetch_array($s_info)){
    		include 'include/list.inc.php';
    		}
    ?>
    </ul>
</div>
<div class="clear"></div>
<?php include 'include/footer.inc.php'; ?>
</body>
</html>