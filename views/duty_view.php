<!DOCTYPE html>
<html>
<head>
    <?php
    $css_list = array('contacts.css');
    include('partial/html_head.php');
    ?>
</head>
<body>
    <div id="wrapper">
        <div id="main-container" class="clearfix">
            <?php 
            $menu_item = 'duty';
            include('partial/header.php');
            ?>
            <div class="container-center">
            <div>	
 			<p >时间：<span id="headertime"></span>&nbsp;&nbsp;<span id="weekday"></span><!--pure-button-disabled-->
 			<button type="button" class=" pure-button  lateRecord">迟到记录</button>
			</p>	 			
			<br/>	
			</div>
                <?php include('duty/duty_body.php');?>
				<?php include('duty/duty_footer.php');?>
            
	        <div class="pure-form login">
	        <input type="text" name="username" placeholder="用户名" />
	        <br/>
	        <input type="password" name="password" placeholder="密码" />
	        <br/>
	        <button type="submit" class="pure-button loginButton" >总管登录</button>
	        </div>
            
            <?php include('manage/manage_check.php');?>
            </div>
        </div>
    </div>
    <?php include('partial/footer.php');?>
</body>
</html>