<div class="sidebar">
    <!-- Sidebar Menu -->
    <?php
    if ($_SESSION['level'] == 'SUPER ADMIN') {
        include('menu/superadmin.php');
    } else if ($_SESSION['level'] == 'ADMIN') {
        include('menu/admin.php');
    } else if ($_SESSION['level'] == 'USER') {
        include('menu/user.php');
    }
    ?>
    <!-- /.sidebar-menu -->
</div>