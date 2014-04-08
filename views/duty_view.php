<!DOCTYPE html>
<html>
<head>
    <?php
    $css_list = array('duty.css');
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
                    <p >时间：<span id="headertime"></span><!--pure-button-disabled-->
                    <button type="button" class=" pure-button  pure-button-primary lateRecord">迟到记录</button>
                    </p>                
                    <p id="weekday">11</p>
                </div>
                <?php include('duty/duty_body.php');?>
				<?php include('duty/duty_footer.php');?>
                <?php include('manage/manage_check.php');?>
            </div>
        </div>
    </div>
    <?php include('partial/footer.php');?>
</body>
</html>