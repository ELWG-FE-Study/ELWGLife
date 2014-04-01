<<<<<<< HEAD
window.onload = function(){
	time=new Date();
	week=time.getDay();
	weekArray=["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
	$(".weekday").innerHTML(weekArray[week]);
	function timer(){	
	var H=time.getHours();
	var M=time.getMinutes();
	var S=time.getSeconds();
	M=checkTime(M);
	S=checkTime(S);
        $('.headertime').innerHTML = (H +':'+ M +':'+ S);
    setTimeout('timer()', 1000);
	}
}

function checkTime(t){
if (t<10) 
  t="0" + t;
  return t;
}

$(document).ready(function() {
    $('.nextweek').hide();
    $('.nextweekButton').click(function() {
        $('.nextweek').toggle();
    });
    $('.loginButton').click(function() {
        $login = $('.login');
        $.post('../page/duty_controller.php', {
                username: $login.find('input[name=username]').val();
                password: $login.find('input[name=password]').val();
            },
            function() {
                if (data == 'ok') //登陆成功返回data，并且data=ok
                    $.post("../cookies.php?action=ok");
                else return 0 ;
            });
    });
});
=======
var weekArray=["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];

$(document).ready(function() {
    getDay();     
    getTime();
    $('.nextweek').hide();
    $('#nextweekButton').click(function() {
        $('.nextweek').toggle();
    });
    $('.loginButton').click(function() {
        $login = $('.login');
        $.post('../page/duty_controller.php', {
                username: $login.find('input[name=username]').val(),
                password: $login.find('input[name=password]').val()
            },
            function() {
               //if (data === 'ok') //登陆成功返回data，并且data=ok
                    $.post("../cookies.php?action=ok");
                //else return;
            }); 
    });
});
   
function getTime(){   
    var time=new Date();
    var H=time.getHours();
    var M=time.getMinutes();
    var S=time.getSeconds();
    M=checkTime(M);
    S=checkTime(S);
    document.getElementById("headertime").innerHTML =H+':'+M+':'+S;
    setTimeout("getTime()", 500); 
}  
function getDay(){
    var time=new Date();
    var week=time.getDay();
    document.getElementById("weekday").innerHTML = weekArray[week];
}  

function checkTime(t){
if (t<10) 
  t="0" + t;
  return t;
}
>>>>>>> FETCH_HEAD
