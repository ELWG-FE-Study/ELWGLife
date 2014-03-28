<div>
<form  class="pure-form" id="searchForm" action="../page/ajax/search_contact.php">
    <input type = "text" class="search_css search_content" name = "s">
    <button class="pure-button contact_button">搜索</button>
</form>
<div id="result">
    <?=$result_search ?>
</div>


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

</div>
