<script language="javascript">
function SetInputNull(){
	var search_a=document.getElementById("search_a");
	search_a.value="";
}
function SetInputDefault(){
	var search_a=document.getElementById("search_a");
	if (!search_a.value){
	search_a.value="输入游戏或平台名称";
	}
	else {
		search_a.value=search_a.value;
		}
}
</script>
<div id="search">
    <form name="search_a" method="get" action="search.php">
        <input id="search_a" name="search_a" type="text" value="输入游戏或平台名称" onfocus="SetInputNull()" onblur="SetInputDefault()"/>
        <input type="submit" id="search_a_btn" value="" />
     </form>
    <form name="search_b" method="get" action="search.php">
      <select name="s_g_n" id="search_game_name">
            <option value="">选择游戏名称</option>
        <?php
		$g_info = mysql_query("SELECT * FROM games order by games_letter");
		while ($row = mysql_fetch_array($g_info)){
			echo "<option>" . $row['games_name'] . "</option>";
			}
         ?>
         </select>
      <select name="s_g_d" id="search_game_developer">
            <option value="">选择运营商</option>
        <?php
		$g_info_ser_game_developer = mysql_query("SELECT * FROM user WHERE user_group='运营商'");
		while ($row = mysql_fetch_array($g_info_ser_game_developer)){
			echo "<option>" . $row['user_plat'] . "</option>";
			}
         ?>
        </select>
      <select name="s_d" id="search_date">
            <option value="">选择日期</option>
        <?php
		$g_info_ser_date = mysql_query("SELECT * FROM server group by ser_date");
		while ($row = mysql_fetch_array($g_info_ser_date)){
			echo "<option>" . date("m-d",strtotime($row['ser_date'])) . "</option>";
			}
         ?>
        </select>
      <select name="s_t" id="search_time">
            <option value="">选择时间</option>
        <?php
		$g_info_ser_time = mysql_query("SELECT * FROM server group by ser_time");
		while ($row = mysql_fetch_array($g_info_ser_time)){
			echo "<option>" . date("H:i",strtotime($row['ser_time'])) . "</option>";
			}
         ?>
        </select>
      <select name="s_g_t" id="search_game_type">
            <option value="">选择类型</option>
            <option value="角色扮演">角色扮演</option>
        <?php
		$g_info_ser_game_type = mysql_query("SELECT * FROM server group by ser_game_type");
		while ($row = mysql_fetch_array($g_info_ser_game_type)){
			echo "<option>" . $row['ser_game_type'] . "</option>";
			}
         ?>
        </select>
      <input type="submit" value="" id="search_b" />
    </form>
</div>