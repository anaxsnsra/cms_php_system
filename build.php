<?php
include "layout/header_other_pages.php";

?>
    <!--Navigation-->
<?php
include "layout/navigation.php";
?>

<!--pc case-->
<div id="myCaseBlock" class="modal" style="overflow:scroll">
    <div class="modal-content">
        <div class="col-lg-9">
            <div class="row">

                <?php
                $query = "SELECT * FROM pc_case";
                $select_all_case = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($select_all_case)) {
                    $case_id = $row['case_id'];
                    $brand = $row['brand'];
                    $model = $row['model'];
                    $size = $row['size'];
                    $rate = $row['rate'];
                    $case_price = $row['price'];
                    $details = $row['details'];
                    $pc_case_image = $row['pc_case_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                        <div class='card h-100'>
                            <img class='card-img-top' width='300px' height='200px' src='img/pc%20product/case/$pc_case_image'>
                                <div class='card-body'>
                                    <h4 class='card-title'>
                                        <a href='#'>$brand  $model</a>
                                    </h4>
                                    <h5>RM $case_price</h5>
                                <p class='card-text'></p>
                                </div>  
                                    <div class='card-footer'>
                                        <small class='text-muted'>Details : $details</small><br>
                                        <small class='text-muted'>rate : $rate</small><br>
                                        <small class='text-muted'>size : $size</small><br>     
                                        <form action='build.php' method='get'>
                                        <input type='hidden' name='storedCaseModel' value='$model'>
                                            <input type='submit' name='caseBtn' value='choose your casing'>
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

<!--pc motherboard-->

<div id="myMoboBlock" class="modal" style="overflow:scroll">
    <div class="modal-content">
        <div class="col-lg-9">
            <div class="row">

                <?php
                $query = "SELECT * FROM motherboard";
                $select_all_mobo = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($select_all_mobo)) {
                    $mobo_id = $row['mobo_id'];
                    $brand = $row['brand'];
                    $model = $row['model'];
                    $size = $row['size'];
                    $rate = $row['rate'];
                    $mobo_price = $row['price'];
                    $details = $row['details'];
                    $pc_case_image = $row['pc_case_image'];
                    
                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                        <div class='card h-100'>
                            <img class='card-img-top' width='300px' height='200px' src='img/pc%20product/case/$pc_case_image'>
                                <div class='card-body'>
                                    <h4 class='card-title'>
                                        <a href='#'>$brand  $model</a>
                                    </h4>
                                    <h5>RM $case_price</h5>
                                <p class='card-text'></p>
                                </div>  
                                    <div class='card-footer'>
                                        <small class='text-muted'>Details : $details</small><br>
                                        <small class='text-muted'>rate : $rate</small><br>
                                        <small class='text-muted'>size : $size</small><br>  
                                        <form action='build.php' method='get'>
                                        <input type='hidden' value='$model' name='storedMoboModel'>
                                        <input type='submit' value='choose your mobo'>
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
<?php
    $_SESSION['storedCaseModel'] = "";
    if (isset($_GET['caseBtn']))
    {
        $_SESSION['storedCaseModel'] = $_GET['storedCaseModel'];
    }
    $_SESSION['']
?>

<div class="build-container">
    <h1>Build pc</h1>
<h4>Choose your pc equipment</h4>
<div class="row">
    <table width="100%" class="table table-hover">
        <tr>
            <td><h6>Case:</h6></td>
            <td>
                <input type="text" name="case" form="test" placeholder="select your case" readonly value="<?php echo $_SESSION['storedCaseModel'] ?>">
            </td>
            <td><input type="text" name="case_price" placeholder="RM 0" readonly value=""></td>
            <td><input type="button" id="caseBtn" onclick="casePc()" class="btn btn-dark" name="choose_case" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>Motherboard:</h6></td>
            <td>
                <input type="text" name="motherboard" form="test" placeholder="select your motherboard" readonly value="">
            </td>
            <td><input type="text" name="motherboard_price" placeholder="RM 0" readonly value=""></td>
            <td><input type="button" id="moboBtn" onclick="mobo()" class="btn btn-dark" name="choose_case" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>CPU:</h6></td>
            <td>
                <input type="text" name="cpu" placeholder="select your cpu" readonly value="">
            </td>
            <td><input type="text" name="cpu_price" placeholder="RM 0" readonly value=""></td>
            <td><a href="build_product_list.php?source=cpu_list"><input type="button" class="btn btn-dark" name="choose_cpu" value="Choose"></a></td>
        </tr>
        <tr>
            <td><h6>RAM:</h6></td>
            <td>
                <input type="text" name="ram" placeholder="select your ram" readonly="" >
            </td>
            <td><input type="text" name="ram_price" placeholder="RM 0" readonly=""></td>
            <td><input type="button" class="btn btn-dark" name="choose_ram" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>Hard Disk:</h6></td>
            <td>
                <input type="text" name="hard_disk" placeholder="select your HDD" readonly="" >
            </td>
            <td><input type="text" name="hard_price" placeholder="RM 0" readonly=""></td>
            <td><input type="button" class="btn btn-dark" name="choose_hard_disk" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>SSD:</h6></td>
            <td>
                <input type="text" name="ssd" placeholder="select your SSD" readonly="" >
            </td>
            <td><input type="text" name="ssd_price" placeholder="RM 0" readonly=""></td>
            <td><input type="button" class="btn btn-dark" name="choose_ssd_disk" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>Graphic Card:</h6></td>
            <td>
                <input type="text" name="graphic_card" placeholder="select your Graphic Card" readonly="" >
            </td>
            <td><input type="text" name="graphic_card_price" placeholder="RM 0" readonly=""></td>
            <td><input type="button" class="btn btn-dark" name="choose_graphic_card" value="Choose"></td>
        </tr>
        <tr>
            <td>
                <label for="case">Power Supply:</label>
            </td>
            <td>
                <input type="text" name="power_supply" placeholder="select your Power supply" readonly="" >
            </td>
            <td><input type="text" name="power_supply_price" placeholder="RM 0" readonly=""></td>
            <td><input type="button" class="btn btn-dark" name="choose_power_supply" value="Choose"></td>
        </tr>
    </table>
</div>
</div>

<!-- Footer -->
<?php
include "layout/footer.php";
?>
