<table class="pure-table contacts-table">
    <thead>
        <tr align="center">
            <td >姓名</td>
            <td >性别</td>
            <td >年级</td>
            <td >电话</td>
            <td >QQ</td>
            <td >常用邮箱</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $index => $row) { ?>
        <tr align="center" class="<?= $index % 2 == 0 ? 'pure-table-odd' : '' ?>">
            <td><?php echo $row["member_name"]; ?></td>
            <td><?php echo $row["sex"] ?></td>
            <td><?php echo $row["grade"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["qq"] ?></td>
            <td><?php echo $row["email"] ?></td>       
        </tr>
        <?php }?>
    </tbody> 
</table>

<div id = "search_remind"></div>
