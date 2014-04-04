<!DOCTYPE html>
<html>
<head>
	
    <?php include(ABS_PATH . 'views/duty/dutyhead.php'); ?>
</head>
<body>
	<div id="wrapper">
    <div id="main-container" calss="clear-fix"> 
    	<?php
    	$menu_item='duty';
    	include('partial/header.php');
    	?>
    	<div class="container-center">
    		<div>	
 				<p >时间：<span id="headertime"></span><!--pure-button-disabled-->
 				<button type="button" class=" pure-button  lateRecord pure-button-primary">迟到记录</button>
				</p>	 			
				<p id="weekday"></p>
				<br/>	
			</div>
			<?php include(ABS_PATH . 'views/duty/duty_body.php'); ?>
			<?php include(ABS_PATH . 'views/duty/duty_footer.php'); ?>
		</div>
</div>
</div>
<?php include(ABS_PATH . 'views/partial/footer.php'); ?>
</body>
</html>
