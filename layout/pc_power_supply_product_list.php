<div id="myPowerSupplyBlock" class="modal" style="overflow:scroll">
    <div class="modal-content" style="width: 1200px">
        <h1 class="selectPower">Select Power Supply</h1>
        <div class="col-lg-9">
            <div class="row">
                <?php
                $query = "SELECT * FROM powersupply";
                $select_all_power_supply = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($select_all_power_supply))
                {
                    $power_supply_id = $row['id'];
                    $power_supply_brand = $row['brand'];
                    $power_supply_model = $row['model'];
                    $power_supply_rate = $row['rate'];
                    $power_supply_price = $row['price'];
                    $power_supply_details = $row['detail'];
                    $power_supply_image = $row['power_supply_image'];
                    $power_supply_power = $row['power'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                            <div class='card h-100'>
                                 <img class='card-img-top' width='360px' height='300px' src='img/pc%20product/power_supply/$power_supply_image'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <a href='#'>$power_supply_brand  $power_supply_model</a>
                                        </h4>
                                        <h5>RM $power_supply_price</h5>
                                        <p class='card-text'></p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>Details : $power_supply_details</small><br>
                                <small class='text-muted'>Rate : $power_supply_rate</small><br>
                                <small class='text-muted'><form action='build.php' method='get'>
                                        <input type='hidden' value='$power_supply_model' name='selectPowerSupplyModel'>
                                        <input type='hidden' value='$power_supply_price' name='selectPowerSupplyPrice'>
                                        <input type='submit' class='btn btn-primary' value='choose'>
                                        </form> </small>
                                </div>
                    </div>
                </div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>