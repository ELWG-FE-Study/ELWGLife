$(document).ready(function(){
    // $('#search input[name = "k"]').keyup(function() {
    //                 $.post('search_remind.php',{'value':$(this).val()},
    //                     fuction(data){
    //                         if(data=='0') $('#search_auto').html().css('display','none');
    //                         else $('#search_auto').html(data).css('display','block');
    //                         });
    //                 });

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