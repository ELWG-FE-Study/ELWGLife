<div class="pure-menu pure-menu-open pure-menu-horizontal" id="header">
    <a href="#" class="pure-menu-heading">ELWG Life</a>
    <ul>
        <?php if(isset($menu_item)) { ?>
        <li class="<?= $menu_item == 'duty' ? 'pure-menu-selected' : '' ?>"><a href="#">值日系统</a></li>
        <li class="<?= $menu_item == 'contacts' ? 'pure-menu-selected' : '' ?>"><a href="#">通讯录</a></li>
        <?php } ?>
    </ul>
</div>
