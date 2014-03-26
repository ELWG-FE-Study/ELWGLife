<div id = "ContactContent">
<div>

<table class = "pure-table pure-table-bordered">
<thead>
	<tr>
		<th>姓名</th>
		<th>性别</th>
		<th>年级</th>
		<th>电话</th>
		<th>QQ</th>
		<th>常用邮箱</th>
	</tr>
</thead>

<tbody >
	<?php var_dump($data);?>
	<?php foreach ($data as $row) { ?>
	<tr>
		
		<td><?= $row['name'] ?></td>
		<td><?= $row['sex'] ?></td>
		<td><?= $row['grade'] ?></td>
		<td><?= $row['tel'] ?></td>
		<td><?= $row['qq'] ?></td>
		<td><?= $row['email'] ?></td>
		
	</tr>
	<?php }?>
</tbody>
</table>

<style>
#search{font-size: 14px;}
#search_remind{
	border:1px solid #817FB2; 
	position:absolute;
	 display:none;}
</style>

<div id = "search">
	<input type = "text" name = "k"/>
	<input type = "button" name = "s" value = "搜索">
</div>
<div id = "search_remind"></div>
<script src="http://ajax.googleapis.com/ajax/lib
	s/jquery/1.8.0/jquery.min.js">
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
</div>