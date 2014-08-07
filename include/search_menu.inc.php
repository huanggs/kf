<div id="main_search">
	<ul>
    	<li class="gray_b">
        <span class="type_title">热门游戏：</span>
        <a href="search.php">全部</a>
        <a href="search.php?s_g_n=王朝霸域">王朝霸域</a>
        <a href="search.php?s_g_n=倚天">倚天</a>
        <a href="search.php?s_g_n=战龙三国" class="hot">战龙三国</a>
        <a href="search.php?s_g_n=新梦幻之城">新梦幻之城</a>
        <a href="search.php?s_g_n=热血海贼王">热血海贼王</a>
        <select name="select" id="search_game_name">
            <option>全部游戏</option>
         </select>
         </li>
    	<li>
        <span class="type_title">开服时间：</span>
        <a href="search.php">全部</a>
        <a href="search.php?s_d=<?php echo $yesterday;?>">昨天</a>
        <a href="search.php?s_d=<?php echo $today;?>"><strong>今天</strong></a>
        <a href="search.php?s_d=<?php echo $tomorrow;?>">明天</a>
        <a href="search.php?s_d=<?php echo $thirdday;?>">后天</a>
      <select name="search_date" id="search_date"> <option value="2013-05-04">2013-05-04</option></select></li>
    	<li class="gray_b">
        <span class="type_title">游戏类型：</span>
        <a href="search.php">全部</a>
        <a href="search.php?s_g_t=角色扮演">角色扮演</a>
        <a href="search.php?s_g_t=战争策略">战争策略</a>
        <a href="search.php?s_g_t=休闲竞技">休闲竞技</a>
        <a href="search.php?s_g_t=模拟经营">模拟经营</a>
        <a href="search.php?s_g_t=棋牌">棋牌</a>
        </li>
    	<li>
        <span class="type_title">游戏画面：</span>
        <a href="search.php">全部</a>
        <a href="search.php?s_g_v=2D">2D</a>
        <a href="search.php?s_g_v=2.5D">2.5D</a>
        <a href="search.php?s_g_v=3D">3D</a>
        </li>
    	<li class="gray_b">
        <span class="type_title">运 营 商：</span>
        <a href="search.php">全部</a>
        <a href="search.php?s_g_d=腾讯游戏">腾讯游戏</a>
        <a href="search.php?s_g_d=4399">4399</a>
        <a href="search.php?s_g_d=37wan">37wan</a>
        <a href="search.php?s_g_d=51wan">51wan</a>
        <a href="search.php?s_g_d=趣游">趣游</a>
        <select name="select" id="opr_co">
            <option>所有运营商</option>
        </select>
        </li>
    </ul>
</div>