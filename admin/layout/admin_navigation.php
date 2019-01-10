<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../admin/index.php">CMS System</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-lg-9">
        <a href="" class="nav-link">Home</a>
        <!--        <li><a href="" class="nav-link">Users Online: --><?php //echo user_online() ?><!--</a></li>-->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                <?php
                echo $_SESSION['username'];
                ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../user_profile.php">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../index.php">Logout</a>
            </div>
        </li>
    </ul>

</nav>