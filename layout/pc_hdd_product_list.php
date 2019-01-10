<div id="myHddBlock" class="modal" style="overflow:scroll">
    <div class="modal-content" style="width: 1000px">
        <h1 class="selectHdd">Select Hard Disk</h1>
        <div class="col-lg-9">
            <div class="row">
                <?php
                $query = "SELECT * FROM hdd";
                $select_all_hdd = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($select_all_hdd))
                {
                    $hdd_id = $row['hdd_id'];
                    $hdd_brand = $row['brand'];
                    $hdd_model = $row['model'];
                    $hdd_size = $row['size'];
                    $hdd_speed = $row['speed'];
                    $hdd_rate = $row['rate'];
                    $hdd_price = $row['price'];
                    $hdd_details = $row['detail'];
                    $pc_hdd_image = $row['hdd_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                            <div class='card h-100' width='200px'>
                                 <img class='card-img-top' width='1000px' height='200px' src='img/pc%20product/hdd/$pc_hdd_image'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <a href='#'>$hdd_brand  $hdd_model</a>
                                        </h4>
                                        <h5>RM $hdd_price</h5>
                                        <p class='card-text'></p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>Details : $hdd_details</small><br>
                                <small class='text-muted'>Rate : $hdd_rate</small><br>
                                <small class='text-muted'>Speed : $hdd_speed</small><br>
                                <form action='build.php' method='get'>
                                        <input type='hidden' value='$hdd_model' name='selectHddModel'>
                                        <input type='hidden' value='$hdd_price' name='selectHddPrice'>
                                        <input type='submit' class='btn btn-primary' value='choose'>
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