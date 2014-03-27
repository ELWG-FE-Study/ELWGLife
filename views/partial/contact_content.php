<div>
<form class="pure-form">
    <input type = "text" class="search_css" name = "k"/>
    <button class="pure-button button_contact">搜索</button>
</form>

<table class="pure-table ContactContent">
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


<div id = "search_remind"></div>

</div>
