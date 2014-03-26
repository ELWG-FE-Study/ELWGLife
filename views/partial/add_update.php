<div id = "ContactContent">
<div>
<script type = "text/javascript">
/*$(document).ready(function(){
    $("#show").click(function(){
        $("#ad").toggle();
    });*/

    $('.btn-toggle-container').click(function() {
        $('.new-contact-container').toggle();
    });

 /*   $('.btn-insert').click(function() {
        var $container = $('.new-contact-container');
        // console.log();
        // console.log($container.find('input[name=sex]').val());

        $.post('../page/ajax/update_contact.php', {
            name: $container.find('input[name=name]').val(),
            sex: $container.find('input[name=sex]').val(),
            grade: $container.find('input[name=grade]').val()
            tel: $container.find('input[name=tel]').val(),
            qq: $container.find('input[name=qq]').val(),
            email: $container.find('input[name=email]').val(),
        });
    });
       
});*/

</script>

<button class="pure-button pure-button-primary btn-toggle-container">添加或修改</button>
<div class="new-contact-container" >
    <form>
    <table class="pure-table">
        <tr align="center">
            <th>姓名</th>
            <th>性别</th>
            <th>年级</th>
            <th>电话</th>
            <th>QQ</th>
            <th>邮箱</th>
        </tr>
        <tr>
            <td><input name="name" type="text" placeholder="name" rows="2"></input></td>
            <td><input name="sex" type="text" placeholder="sex"></input></td>
            <td><input name="grade" type="text" placeholder="grade"></input></td>
            <td><input name="tel" type="text" placeholder="telephone"></input></td>
            <td><input name="qq" type="text" placeholder="QQ"></input></td>
            <td><input name="email" type="text" placeholder="email"></input></td>
        </tr>
    </table>
    </form>
    <button class="pure-button pure-button-primary btn-insert">完成</button>
</div>
</div>
</div>