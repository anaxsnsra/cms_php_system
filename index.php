<?php

    include "layout/header.php";

?>
<!--Navigation-->
<?php
    include "layout/navigation.php";
    $_SESSION = array();
    session_destroy();
?>
<section class="col serv" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-left">
                <h2 class="section-heading text-white">Services</h2>
                <p class="text-faded mb-4">Service provided in our shop</p>
                <ul class="list-group">
                    <li class="list-group-item">&nbsp; Format Laptop</li>
                    <li class="list-group-item">&nbsp; Maintenance Laptop (change thermal paste, clean fan)</li>
                    <li class="list-group-item">&nbsp; Format PC</li>
                    <li class="list-group-item">&nbsp; Maintenance PC(change thermal paste, clean casing, fans etc</li>
                    <li class="list-group-item">&nbsp; Request software or games</li>
                    <li class="list-group-item">&nbsp; Delivery / Pick up</li>
                    <li class="list-group-item">&nbsp; Pc builder</li>

                </ul>
            </div>
            <div class="col-lg-4  text-center">
                <img src="img/headerPcPhoto/pc-rig.png" class="rounded" alt="">
            </div>
        </div>
    </div>
</section>

<section id="services" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Your PC Expert</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-play text-primary mb-3 sr-icon-4"></i>
                    <h3 class="mb-3">Erina</h3>
                    <p class="text-muted mb-0">information about the pc expert</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i><img src="img/profile/erin3.JPG" class="rounded-circle card-img mx-auto" alt=""></i>
                    <h3 class="mb-3">Erina</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-headphones text-primary mb-3 sr-icon-4"></i>
                    <h3 class="mb-3">Details</h3>
                    <p class="text-muted mb-0">You have to make your websites with love these days!</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <hr class="my-4"

<section id="services" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i><img src="img/product/l-class-main.png" class="rounded card-img mx-auto" alt=""></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <h3 class="mb-3">Details explanation</h3>
                    <p class="text-muted mb-0">Explanation about pc equipment</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <hr class="my-4"

<section class="bg-success" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery bg-light">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Product Category List</h2>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<hr class="my-4">
<!--Footer-->
<?php
    include "layout/footer.php";
?>
