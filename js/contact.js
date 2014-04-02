$(document).ready(function(){
    
    $(".btn-toggle-container").click(function() {
        $(".new-contact-container").toggle();
    });
    
     $('.btn-insert').click(function() {
        var $container = $('.new-contact-container');
        $.post('../page/ajax/insert.php', {
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
            $('#contactContent tbody').append($row);
        }, 'json');
        setTimeout(function(){window.location.reload();},900);
     }); 

     $(".btn-search").click(function() {
        //alert("a");
        $(".searchResult").show();
        var $container = $('#mainContent');
        $.post('../page/ajax/search_contact.php', {
            key: $container.find('input[name=key]').val(),
        }, function(data) {
            console.log(data);
            var $row = $('<tr>'),
                key;
            for(key in data) {
                $row.append($('<td>').html(data[key]));
            }
            $('.searchResult tbody').append($row);
        },'json');
        //var a = $container.find('input[name=key]').val();
        //alert(a);
     });
});