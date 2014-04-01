<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div id="mainContent">
<form class="pure-form">
    <input type = "text"  class="search_css" name = "key"/>

    <button class="pure-button button_contact btn-search">搜索</button>
</form>

<table class="pure-table ContactContent"  >
    <thead >
        <tr align="center" >
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
    <tr align="center" >
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

</div>
=======
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
<div>
<form  class="pure-form" id="searchForm" action="../page/ajax/search_contact.php">
    <input type = "text" class="search_css search_content" name = "s">
    <button class="pure-button search_button">搜索</button>
</form>
<div id="result">
    
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

</div>
>>>>>>> FETCH_HEAD
