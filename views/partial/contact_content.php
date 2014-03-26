

<div>

<table class = "pure-table pure-table-bordered" id="ContactContent">
<tbody>
	<tr align="center">
		<th >姓名</th>
		<th >性别</th>
		<th >年级</th>
		<th >电话</th>
		<th >QQ</th>
		<th >常用邮箱</th>
	</tr>

	<?php foreach ($data as $row) { ?>
	<tr align="center">
		
		<td><?= $row["member_name"] ?></td>
		<td><?= $row["sex"] ?></td>
		<td><?= $row["grade"] ?></td>
		<td><?= $row["phone"] ?></td>
		<td><?= $row["qq"] ?></td>
		<td><?= $row["email"] ?></td>		
	</tr>
	<?php }?>
	</tbody>
</table>

<form class="pure-form" id="ContactContent">
	<input type = "text" name = "k"/>
	<a class="pure-button pure-button-primary" href="javascript:void(0);">搜索</a>
</form>
<div id = "search_remind"></div>
<script src="../css/jquery-1.11.0.js">
	$(function(){
		$('#search input[name = "k"].keyup(function(){
			$.post('search_remind.php',{'value':$(this).val()},
				fuction(data){
					if(data=='0′) $(‘#search_auto').html(”).css(‘display','none');
                    else $(‘#search_auto').html(data).css(‘display','block');
					});
			});
	});
</script>


</div>
