<div>
		<table class="pure-table pure-table-horizontal">
			<thead>
				<tr>
					<th><p id="dutytable">值日表</p></th>
					<th><button calss="pure-button nextweekButton">下一周</button></th>
				</tr>
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
			<tbody> <!-- $duty_result[]主要是model层返回的本周及次周值日成员 -->
				<tr>  
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>	
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
				</tr>
				<tr class="nextweek">
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>	
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
					<td><?php $duty_result[] ?></td>
				</tr>
			</tbody>
		</table>
	</div>
