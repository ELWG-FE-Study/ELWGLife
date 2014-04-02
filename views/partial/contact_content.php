<div id="mainContent">
<div class="pure-form">
    <div class="searchInput">
        <input type = "text"  class="search_css" name = "key"/>
        <button class="pure-button button_contact btn-search">搜索</button>
    </div>
    <div class="searchResult hidden">
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
            <tbody align="center"></tbody> 
        </table>
    </div>
</div>

<table class="pure-table ContactContent" id="contactContent"  >
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
    <tbody align="center">

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
