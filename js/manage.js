function startTime()
{
var weekday=new Array(7);
weekday[0]="星期日";
weekday[1]="星期一";
weekday[2]="星期二";
weekday[3]="星期三";
weekday[4]="星期四";
weekday[5]="星期五";
weekday[6]="星期六";
var today=new Date();
var y=today.getFullYear();
var mon=today.getMonth()+1;
var d=today.getDate();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10

mon=checkTime(mon);
m=checkTime(m);
d=checkTime(d);
s=checkTime(s);
document.getElementById("timenow").innerHTML=y+"年"+mon+"月"+d+"日"+h+"时"+m+"分"+s+"秒"+" "+weekday[today.getDay()]
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}

function displayLater(){
	document.getElementById("demo").innerHTML = $(".check_input").val();
}

$(document).ready(function(){
	$("#punish").click(function(){
		var $container = $('.manage-container');
		$.post('../page/ajax/update_later.php',{
		name: $container.find('input[name=later]').val(),
		});
	});
    // $(".loginButton").click(function(){
    // 	$(".login").hide("slow")
    // });
    // $(".loginButton").click(function(){
    // 	$(".manage_container").fadeIn("slow");
    // });
    // $(".loginButton").click(function(){
    // 	var $container = $('.login');
    // 	$.post('../page/ajax/login.php',{
    // 		username:$container.find('input[name=username]').val(),
    // 		password:$container.find('input[name=passwrod]').val(),
    // 	})
    // })
});
