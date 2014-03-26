<div id = "ContactContent">
<div>
<script type = "text/javascript">
$(document).ready(function(){
    $("#show").click(function(){
        $("#ad").toggle();
    });

    $('.btn-toggle-container').click(function() {
        $('.new-contact-container').toggle();
    });

    $('.btn-insert').click(function() {
        var $container = $('.new-contact-container');
        // console.log();
        // console.log($container.find('input[name=sex]').val());

        $.post('../page/ajax/update_contact.php', {
            name: $container.find('input[name=name]').val(),
            sex: $container.find('input[name=sex]').val()
        });
    });
});
</script>

<button class="pure-button pure-button-primary btn-toggle-container">添加或修改</button>
<div class="new-contact-container hidden">
    <table class="pure-table pure-table-bordered" id="ad" >
    <thead>
        <tr>
            <th>姓名</th>
            <th>性别</th>
            <th>年级</th>
            <th>电话</th>
            <th>QQ</th>
            <th>常用邮箱</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input name="name" type="text"></input></td>
            <td><input name="sex" type="text"></input></td>
            <td><input name="" type="text"></input></td>
            <td><input name="" type="text"></input></td>
            <td><input name="" type="text"></input></td>
            <td><input name="" type="text"></input></td>
        </tr>
    </tbody>
    </table>
    <button class="pure-button pure-button-primary btn-insert">完成</button>
</div>
</div>
</div>