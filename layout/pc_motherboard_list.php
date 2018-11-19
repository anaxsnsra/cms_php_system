<div id="myMoboBlock" class="modal" style="overflow:scroll">
    <div class="modal-content">
        <h1>Select Motherboard</h1>
        <div class="col-lg-9">
            <div class="row">

                <?php
                $query = "SELECT * FROM motherboard";
                $select_all_mobo = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($select_all_mobo)) {
                    $mobo_id = $row['mobo_id'];
                    $mobo_brand = $row['brand'];
                    $mobo_model = $row['model'];
                    $size = $row['size'];
                    $rate = $row['rate'];
                    $mobo_price = $row['price'];
                    $mobo_details = $row['details'];
                    $pc_mobo_image = $row['mobo_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                        <div class='card h-100'>
                            <img class='card-img-top' width='300px' height='200px' src='img/pc%20product/motherboard/$pc_mobo_image'>
                                <div class='card-body'>
                                    <h4 class='card-title'>
                                        <a href='#'>$mobo_brand  $mobo_model</a>
                                    </h4>
                                    <h5>RM $mobo_price</h5>
                                <p class='card-text'></p>
                                </div>  
                                    <div class='card-footer'>
                                        <small class='text-muted'>Details : $mobo_details</small><br>
                                        <small class='text-muted'>rate : $rate</small><br>
                                        <small class='text-muted'>size : $size</small><br>  
                                        <form action='build.php' method='get'>
                                        <input type='hidden' value='$mobo_model' name='selectMoboModel'>
                                        <input type='hidden' value='$mobo_price' name='selectMoboPrice'>
                                        <input type='submit' class='btn btn-primary' value='choose your mobo'>
                                        </form>                                 
                                    </div> 
                         </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>