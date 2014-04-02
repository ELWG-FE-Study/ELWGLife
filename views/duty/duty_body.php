<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
					<td><?php $duty_result[0] ?></td>
					<td><?php $duty_result[1] ?></td>
					<td><?php $duty_result[2] ?></td>
					<td><?php $duty_result[3] ?></td>	
					<td><?php $duty_result[4] ?></td>
					<td><?php $duty_result[5] ?></td>
					<td><?php $duty_result[6] ?></td>
				</tr>
				<tr class="nextweek">
					<td><?php $duty_result[7] ?></td>
					<td><?php $duty_result[8] ?></td>
					<td><?php $duty_result[9] ?></td>
					<td><?php $duty_result[10] ?></td>	
					<td><?php $duty_result[11] ?></td>
					<td><?php $duty_result[12] ?></td>
					<td><?php $duty_result[13] ?></td>
				</tr>
			</tbody>
		</table>
	</div>
=======
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
<!--<div id="dutytable"></div>-->
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
			<tbody> <!-- $duty_result[]主要是model层返回的本周及次周值日成员 -->
			<tbody> <!-- $duty_result[]主要是model层返回的本周及次周值日成员 -->
            <tr>  
                <td><?= $data[0]['member_name'] ?></td>
                <td><?= $data[1]['member_name'] ?></td>
                <td><?= $data[2]['member_name'] ?></td>
                <td><?= $data[3]['member_name'] ?></td>   
                <td><?= $data[4]['member_name'] ?></td>
                <td><?= $data[5]['member_name'] ?></td>
                <td><?= $data[6]['member_name'] ?></td>
            </tr>
            <tr class="nextweek">
                <td><?= $data[7]['member_name'] ?></td>
                <td><?= $data[8]['member_name'] ?></td>
                <td><?= $data[9]['member_name'] ?></td>
                <td><?= $data[10]['member_name'] ?></td>  
                <td><?= $data[11]['member_name'] ?></td>
                <td><?= $data[12]['member_name'] ?></td>
                <td><?= $data[13]['member_name'] ?></td>
            </tr>
        </tbody>
			</tbody>
		</table>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
