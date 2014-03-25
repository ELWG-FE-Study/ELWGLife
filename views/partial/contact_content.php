<div class = "pure-g-r">

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

<tbody>
	<tr>
		<td><?= $data['name'] ?></td>
		<td><?= $data['sex'] ?></td>
		<td><?= $data['grade'] ?></td>
		<td><?= $data['tel'] ?></td>
		<td><?= $data['qq'] ?></td>
		<td><?= $data['email'] ?></td>
	</tr>
</tbody>
</table>

<div class="search_form">
<?php $search_text = "Search...";?>
<form method = "get" id="searchform" action="<?=$data['name'];?>/">
<input 
type = "text" 
value = "<?php echo $search_text;?>" 
name="s"
id = "s" 
onblur = "if(this.value == ""){
	this.value = '<?php echo $search_text;?>'
}"
onfocus = "if(this.value == '<?php echo $search_text;?>'){
	this.value = "";
}"/>

</input>
</form>
</div>

</div>