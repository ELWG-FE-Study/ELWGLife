<div>
<div>
    <input type = "text" class="search_css" name = "s"/>
    <button class="pure-button button_contact">搜索</button>
</div>

<table class="pure-table ContactContent contact_table">
    <thead>
        <tr align="center">
            <th width="10%">姓名</th>
            <th width="10%">性别</th>
            <th width="10%">年级</th>
            <th width="20%">电话</th>
            <th width="20%">QQ</th>
            <th width="30%">常用邮箱</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $row) { ?>
    <tr align="center">
        <td ><?= $row["member_name"] ?></td>
        <td ><?= $row["sex"] ?></td>
        <td ><?= $row["grade"] ?></td>
        <td ><?= $row["phone"] ?></td>
        <td ><?= $row["qq"] ?></td>
        <td ><?= $row["email"] ?></td>       
    </tr>
    <?php }?>
    </tbody>
</table>


<div id = "search_remind"></div>

</div>
