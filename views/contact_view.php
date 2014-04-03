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
            $menu_item = 'contacts';
            include('partial/header.php');
            ?>
            <div class="container-center">
                <?php include('partial/contact_control.php');?>
                <?php include('partial/contact_content.php');?>
            </div>
        </div>
    </div>
    <?php include('partial/footer.php');?>
</body>
</html>