<p >值日表<button calss="pure-button" id="nextweekButton">下一周</button>
</p>
<table class="pure-table pure-table-horizontal">			
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
	<tbody> <!-- $data[]主要是model层返回的本周及次周值日成员 -->
		<tr> 
			<td><?php echo $result[0] ?></td>
			<td><?php echo $result[1] ?></td>
			<td><?php echo $result[2] ?></td>
			<td><?php echo $result[3] ?></td>
			<td><?php echo $result[4] ?></td>
			<td><?php echo $result[5] ?></td>
			<td><?php echo $result[6] ?></td>
					
					
		</tr>
		<tr class="nextweek">
			<td><?php echo $result[7] ?></td>
			<td><?php echo $result[8] ?></td>
			<td><?php echo $result[9] ?></td>
			<td><?php echo $result[10] ?></td>
			<td><?php echo $result[11] ?></td>
			<td><?php echo $result[12] ?></td>
			<td><?php echo $result[13] ?></td>
					
		</tr>
		</tbody>
</table>

