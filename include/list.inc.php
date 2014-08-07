    	<li>
        <span class="list_game_name"><? echo $row['ser_game_name'];?></span>
        <span class="list_ser_name"><?=$row['ser_name']?></span>
        <span class="list_date">
		<?php
		if ($row['ser_date']==$today):
		echo "今天";
		elseif ($row['ser_date']==$tomorrow):
		echo "明天";
		elseif ($row['ser_date']==$thirdday):
		echo "后天";
		elseif ($row['ser_date']==$yesterday):
		echo "昨天";
		elseif ($row['ser_date']==$byday):
		echo "前天";
		elseif ($row['ser_date']!==$today):
		echo date('n月j日',strtotime($row['ser_date']));
		endif;
		?>
        </span>
        <span class="list_time"><?=date("G:i",strtotime($row['ser_time']))?></span>
        <span class="list_reminder">
        <script type="text/javascript">
			var __qqClockShare = {
			   content: "《<?=$row['ser_game_name']?>》新服“<?=$row['ser_name']?>”将于<?=date("n月j日",strtotime($row['ser_date']))?><?=date("G:i",strtotime($row['ser_time']))?>火爆开启。\n进入游戏：<?=$row['ser_website']?>",
			   time: "<?=date("Y-n-j",strtotime($row['ser_date']))?> <?=date("G:i",strtotime($row['ser_time']))?>",
			   advance: 5,
			   url: "http://<?=$row['ser_website']?>",
			   icon: "3_1"
			};
			document.write('<a href="http://qzs.qq.com/snsapp/app/bee/widget/open.htm#content=' + encodeURIComponent(__qqClockShare.content) +'&time=' + encodeURIComponent(__qqClockShare.time) +'&advance=' + __qqClockShare.advance +'&url=' + encodeURIComponent(__qqClockShare.url) + '" target="_blank"></a>');
		</script>
        </span>
        <span class="list_type_1"><?=$row['ser_game_vision']?></span>
        <span class="list_type_2"><?=$row['ser_game_type']?></span>
        <span class="list_enter"><a href="<?=$row['ser_website']?>" target="_blank"></a></span>
        <span class="list_opr_co"><?=$row['ser_game_developer']?></span>
        </li>