<?php
include "layout/header_other_pages.php";
?>

    <!--Navigation-->
<?php

include "layout/navigation.php";

?>

<div class="row product">
<!-- Categories Widget -->
<?php
include "layout/sideBarMenu.php";
?>
<div class="col-lg-9">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Product Names</a>
                    </h4>
                    <ul>
                        product description
                        <div class="input-group">
                            <div class="form-group">Quantity : </div>
                                    <span class="input-group-btn">
                                        <button type="button" class="minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <span class="fas fa-minus"></span>
                                        </button>
                                    </span>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="100">
                                <span class="input-group-btn">
                                        <button type="button" class="plus btn btn-success btn-number" data-type="plus" data-field="">
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    </span>
                            </div>
                        <div class="row">
                        <input class="btn btn-primary" type="submit" name="buy_now" value="Buy Now">
                        <input class="btn btn-primary" type="submit" name="add_to_cart" value="Add Cart">
                        </div>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>
</div>





<!-- Footer -->
<?php
include "layout/footer.php";
?>
