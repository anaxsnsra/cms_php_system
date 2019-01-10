<?php

    include "layout/header.php";

?>
<!--Navigation-->
<?php
    include "layout/navigation.php";
    $_SESSION = array();
    session_destroy();
?>
<section class="col serv" id="service">
    <div class="container service_container">
        <div class="row">
            <div class="col-lg-5 text-left">
                <h2 class="section-heading" style="color: #17a2b8">Services</h2>
                <p class="text-faded mb-4" style="color: #004085">Service provided in our shop</p>
                <ul class="list-group" style="color: #bd2130">
                    <li class="fa fa-laptop list-group-item">&nbsp; Format Laptop</li>
                    <li class="fa fa-laptop list-group-item">&nbsp; Maintenance Laptop (change thermal paste, clean fan)</li>
                    <li class="fa fa-laptop list-group-item">&nbsp; Format PC</li>
                    <li class="fa fa-laptop list-group-item">&nbsp; Maintenance PC(change thermal paste, clean casing, fans etc</li>
                    <li class="fa fa-laptop list-group-item">&nbsp; Request software or games</li>
                    <li class="fa fa-laptop list-group-item">&nbsp; Delivery / Pick up</li>
                    <li class="fa fa-laptop list-group-item">&nbsp; Pc builder</li>
                </ul>
            </div>
            <div class="col-lg-4  text-center">
                <img src="img/headerPcPhoto/pc-rig.png" class="rounded" alt="">
            </div>
        </div>
    </div>
</section>

<section id="about" class="">
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
                    <i class="fas fa-4x fa-laptop text-primary mb-3 sr-icon-4"></i>
                    <h3 class="mb-3">Erin</h3>
                    <p class="text-muted mb-0">Katrina Maria Binti Muhammad Shahril
                    start build pc in year 2007</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i><img src="img/profile/erin3.jpg" class="rounded-circle card-img mx-auto" alt=""></i>
                    <h3 class="mb-3">Erina</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-desktop text-primary mb-3 sr-icon-4"></i>
                    <h3 class="mb-3">Details</h3>
                    <p class="text-muted mb-0">Erina’s PC Workshop is about online pc product and pc customization.
                        Customer can used the website system to purchase any pc product that available and build own pc equipment. This website will list all pc product and customers can buy each part separately. Custom PC build will display quotation for the price for each part been selected.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <h3 class="mb-3">PC parts</h3>
                    <p class="text-muted mb-0">PC part consist of : </p>
                    <ul class="list-group">
                        <li class="list-group-item">&nbsp; Monitor</li>
                        <li class="list-group-item">&nbsp; PC case</li>
                        <li class="list-group-item">&nbsp; RAM</li>
                        <li class="list-group-item">&nbsp; Graphic card</li>
                        <li class="list-group-item">&nbsp; HDD</li>
                        <li class="list-group-item">&nbsp; SSD</li>
                        <li class="list-group-item">&nbsp; Motherboard</li>
                        <li class="list-group-item">&nbsp; Power supply</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <hr class="my-4"

<!--Footer-->
<?php
    include "layout/footer.php";
?>
