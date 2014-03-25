<div class = "pure-g-r">
<script type = "text/javascript">
$(document).ready(function(){
	$("#show").click(function(){
		$("table").show();
	});
});
</script>

<body>
<button id = "show" type = "button">添加或修改</button>
<table class = "pure-table pure-table-bordered" type = "hidden">
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
		<td ><input type = "text"></input></td>
		<td ><input type = "text"></input></td>
		<td ><input type = "text"></input></td>
		<td ><input type = "text"></input></td>
		<td ><input type = "text"></input></td>
		<td ><input type = "text"></input></td>
	</tr>
</tbody>
</table>



</body>
</div>