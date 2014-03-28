window.onload=function timer(){
	var time = <?php echo date('H:i:s'); ?>
	$('.headertime').innerHTML=time;
	setTimeinterval('timer()',1000);
}

$(document).ready(function(){
	$('.nextweek').hide();
	$('.nextweekButton').click(function(){
	$('.nextweek').toggle();
	});
	$('.loginButton').click(function(){
		$login=$('.login');
		$.post('../page/duty_controller.php',{
			username: $login.find('input[name=username]').val();
			password: $login.find('input[name=password]').val();
		},
		function(){
			if(data=='ok')    //登陆成功返回data，并且data=ok
			$.post("../cookies.php?action=ok");
		else return;
		});
	});
});