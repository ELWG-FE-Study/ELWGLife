<!DOCTYPE html>
<html>
<head>
    <?php
    $css_list = array('contacts.css');
    include('partial/html_head.php');
    ?>
</head>
<body>
    <?php 
    $menu_item = 'contacts';
    include('partial/header.php');
    ?>
    <?php include('partial/contact_content.php');?>
    <?php include('partial/add_update.php');?>
    <?php include('partial/footer.php');?>
</body>
</html>