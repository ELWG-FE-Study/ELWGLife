<p >值日表
	<button type="button" class="pure-button pure-button-primary" id="nextweekButton">
		下一周</button>
</p>
<table class="pure-table pure-table-horizontal duty-table">			
	<thead>
		<tr>
			<th>星期一</th>
			<th>星期二</th>
			<th>星期三</th>
			<th>星期四</th>
			<th>星期五</th>
			<th>星期六</th>
			<th>星期日</th>
		</tr>
	</thead>
	<tbody> <!-- $result[]主要是model层返回的本周及次周值日成员 -->
		<tr> 
			<td><?= $result[0] ?></td>
			<td><?= $result[1] ?></td>
			<td><?= $result[2] ?></td>
			<td><?= $result[3] ?></td>
			<td><?= $result[4] ?></td>
			<td><?= $result[5] ?></td>
			<td><?= $result[6] ?></td>
		</tr>
		<tr class="nextweek">
			<td><?= $result[7] ?></td>
			<td><?= $result[8] ?></td>
			<td><?= $result[9] ?></td>
			<td><?= $result[10] ?></td>
			<td><?= $result[11] ?></td>
			<td><?= $result[12] ?></td>
			<td><?= $result[13] ?></td>
					
		</tr>
		</tbody>
</table>


