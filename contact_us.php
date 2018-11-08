<?php
include "layout/header_other_pages.php";
?>
    <!--Navigation-->
<?php

include "layout/navigation.php";

?>
<section class="col build">


</section>


<div class="row bg-light">
<!-- Page Content -->
<section class="col ">
    <form class="custom-form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group"><h1 class="text-center">Send us a message ..</h1></div>
        <div class="form-group">
            <label for="username" >Name</label>
            <input type="text" value="" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" value="" class="form-control" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" placeholder="Enter your message"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send_msg" value="Send" class="btn btn-primary">
        </div>
    </form>
</section>
    <img src="http://placehold.it/700x400" alt="">
</div>
<!-- /.container -->

<!-- Footer -->
<?php
include "layout/footer.php";
?>

