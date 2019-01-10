<div id="myRamBlock" class="modal" style="overflow:scroll">
    <div class="modal-content">
        <h1 class="selectRam">Select PC RAM</h1>
        <div class="col-lg-9">
            <div class="row">
                <?php
                $query = "SELECT * FROM pc_ram";
                $select_all_ram = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($select_all_ram))
                {
                    $ram_id = $row['ram_id'];
                    $ram_brand = $row['brand'];
                    $ram_model = $row['model'];
                    $ram_storage = $row['storage'];
                    $ram_slot_need = $row['slot_need'];
                    $ram_support = $row['ram_support'];
                    $ram_rate = $row['rate'];
                    $ram_price = $row['ram_price'];
                    $ram_details = $row['details'];
                    $pc_ram_image = $row['ram_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                            <div class='card h-100'>
                                 <img class='card-img-top' width='260px' height='300px' src='img/pc%20product/ram/$pc_ram_image'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <a href='#'>$ram_brand  $ram_model</a>
                                        </h4>
                                        <h5>RM $ram_price</h5>
                                        <p class='card-text'></p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>Details : $ram_details</small><br>
                                <small class='text-muted'>Rate : $ram_rate</small><br>
                                <small class='text-muted'>Support : $ram_support</small><br>
                                <form action='build.php' method='get'>
                                        <input type='hidden' value='$ram_model' name='selectRamModel'>
                                        <input type='hidden' value='$ram_price' name='selectRamPrice'>
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