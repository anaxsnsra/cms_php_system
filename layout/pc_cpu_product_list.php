<div id="myCpuBlock" class="modal" style="overflow:scroll">
    <div class="modal-content">
        <h1 class="selectCpu">Select PC Cpu</h1>
        <div class="col-md-9">
            <div class="row">
                <?php
                $query = "SELECT * FROM pc_cpu";
                $select_all_cpu = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($select_all_cpu))
                {
                    $cpu_id = $row['cpu_id'];
                    $brand = $row['brand'];
                    $cpu_model = $row['model'];
                    $clockspeed = $row['clockspeed'];
                    $maxspeed = $row['maxspeed'];
                    $socket = $row['socket'];
                    $core = $row['core'];
                    $thread = $row['thread'];
                    $cpuGraphic = $row['CPUGraphic'];
                    $rate = $row['rate'];
                    $cpu_price = $row['price'];
                    $details = $row['details'];
                    $pc_cpu_image = $row['cpu_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                            <div class='card h-100'>
                                 <img class='card-img-top' width='260px' height='300px' src='img/pc%20product/cpu/$pc_cpu_image'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <a href='#'>$brand  $cpu_model</a>
                                        </h4>
                                        <h5>RM $cpu_price</h5>
                                        <p class='card-text'></p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>Details : $details</small><br>
                                <small class='text-muted'>Rate : $rate</small><br>
                                <small class='text-muted'>Clockspeed : $clockspeed</small><br>
                                <small class='text-muted'>Maxspeed : $maxspeed</small><br>
                                <small class='text-muted'>Socket : $socket</small><br>
                                <form action='build.php' method='get'>
                                        <input type='hidden' value='$cpu_model' name='selectCpuModel'>
                                        <input type='hidden' value='$cpu_price' name='selectCpuPrice'>
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