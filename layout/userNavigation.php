<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="./userHomePage.php">Erina's PC Workshop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="./userHomePage.php#about">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="./userHomePage.php#aboutPC">PC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="./userHomePage.php#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact us</a>
                </li>
                <li class="nav-item dropdown">

                    <a href="#" class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                            if ($_SESSION['user_role'] == "administrator")
                            {
                                ?>
                                <li><a class="nav-link js-scroll-trigger" href="./admin/index.php">Admin</a></li>
                        <?php
                            }
                        ?>
                        <li><a class="nav-link js-scroll-trigger" href="./user_profile.php">Account</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>
                    </ul>
                </li>
                </li
            </ul>
        </div>
    </div>
</nav>