<div id = "update">
<script type = "text/javascript">
$(document).ready(function(){
    $(".btn-toggle-container").click(function() {
        $(".new-contact-container").toggle();
    });
});
</script>

<script type = "text/javascript">
$(document).ready(function(){
        $('.btn-insert').click(function() {
        var $container = $('.new-contact-container');
        // console.log();
        // console.log($container.find('input[name=sex]').val());

        $.post('../page/ajax/update_contact.php', {
            $name: $container.find('input[name=name]').val(),
            $sex: $container.find('input[name=sex]').val(),
            $grade: $container.find('input[name=grade]').val()
            $tel: $container.find('input[name=tel]').val(),
            $qq: $container.find('input[name=qq]').val(),
            $email: $container.find('input[name=email]').val(),
        });
    });
</script>


<button class="button_contact pure-button btn-toggle-container">添加或修改</button>
<div class="new-contact-container hidden">
    <form class="pure-form">
    <table>
        <tr align="center">
            <th>姓名</th>
            <th>性别</th>
            <th>年级</th>
            <th>电话</th>
            <th>QQ</th>
            <th>邮箱</th>
        </tr>
        <tr>
            <td><input name="name" type="text" placeholder="name" style="width:130px"></input></td>
            <td><input name="sex" type="text" placeholder="sex" style="width:100px"></input></td>
            <td><input name="grade" type="text" placeholder="grade"  style="width:100px"></input></td>
            <td><input name="tel" type="text" placeholder="telephone" style="width:200px"></input></td>
            <td><input name="qq" type="text" placeholder="QQ" style="width:175px"></input></td>
            <td><input name="email" type="text" placeholder="email" style="width:290px"></input></td>
        </tr>
        <tr>
        <td><button class="button_contact pure-button btn-insert">完成</button></td>
        </tr>
    </table>
    </form>
</div>
</div>