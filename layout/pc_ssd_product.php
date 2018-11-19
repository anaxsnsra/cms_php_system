<div id="mySsdBlock" class="modal" style="overflow:scroll">
    <div class="modal-content" style="width: 1200px">
        <h1>Select SSD</h1>
        <div class="col-lg-9">
            <div class="row">
                <?php
                $query = "SELECT * FROM ssd";
                $select_all_ssd = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($select_all_ssd))
                {
                    $ssd_id = $row['ssd_id'];
                    $ssd_brand = $row['brand'];
                    $ssd_model = $row['model'];
                    $ssd_size = $row['size'];
                    $ssd_rate = $row['rate'];
                    $ssd_price = $row['price'];
                    $ssd_details = $row['detail'];
                    $pc_ssd_image = $row['ssd_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                            <div class='card h-100'>
                                 <img class='card-img-top' width='360px' height='300px' src='img/pc%20product/ssd/$pc_ssd_image'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <a href='#'>$ssd_brand  $ssd_model</a>
                                        </h4>
                                        <h5>RM $ssd_price</h5>
                                        <p class='card-text'></p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>Details : $ssd_details</small><br>
                                <small class='text-muted'>Rate : $ssd_rate</small><br>
                                <form action='build.php' method='get'>
                                        <input type='hidden' value='$ssd_model' name='selectSSDModel'>
                                        <input type='hidden' value='$ssd_price' name='selectSSDPrice'>
                                        <input type='submit' class='btn btn-primary' value='choose your SSD'>
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