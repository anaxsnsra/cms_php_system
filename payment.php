<?php
include "layout/header_other_pages.php";
?>
    <!--Navigation-->
<?php

include "layout/navigation.php";

?>
<section class="payment">
    <h2>Payment Details</h2>
    <div class="row">
    <div class="form-group col-md-6">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#credit" role="tab" aria-controls="creditCard" aria-selected="true">Credit Card</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Online Banking</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="credit" role="tabpanel" aria-labelledby="home-tab">
            <section class="">
                <div class="form-group">
                    <input type="button" class="btn btn-primary" value="payNow">
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <section class="">
                <div class="form-group">
                    <input type="button" class="btn btn-primary" value="payNow">
                </div>
            </section>
        </div>
    </div>
    </div>
        <section class="bg-light">
            <div class="form-group col-sm-4">asdhasdkasdkasdhkashdkashd</div>
        </section>
    </div>
</section>

<!-- Footer -->
<?php
include "layout/footer.php";
?>

