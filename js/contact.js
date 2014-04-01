$(document).ready(function(){
    $(".search_button").click(function(event){
        event.preventDefault();
        var $form = $('.search_content');
        key = $form.find("input[name='s']").val();
        $.post('../page/ajax/search_contact.php',{s:key});

        //把结果放在div中
        /*posting.done(function(data){
            var content = $(data).find(".ContactContent");
            $("#result").empty().append(content);
        });*/
    $(".contact_button").click(function(event){
        event.preventDefault();
        var $form =$('.search_content');
        $key = $form.find("input[name=s]").val();
        var posting = $.post('../page/ajax/search_contact.php',{s:key});

    });


    $(".btn-toggle-container").click(function() {
        $(".new-contact-container").toggle();
    });

    $('.btn-insert').click(function() {
        var $container = $('.new-contact-container');
        $.post('../page/ajax/update_contact.php', {
            name: $container.find('input[name=name]').val(),
            sex: $container.find('input[name=sex]').val(),
            grade: $container.find('input[name=grade]').val(),
            tel: $container.find('input[name=tel]').val(),
            qq: $container.find('input[name=qq]').val(),
            email: $container.find('input[name=email]').val(),           
        }, function(data) {
            var $row = $('<tr>'),
                key;

            for(key in data) {
                $row.append($('<td>').html(data[key]));
            }
            $('.ContactContent tbody').append($row);
        }, 'json');
    });
}); 