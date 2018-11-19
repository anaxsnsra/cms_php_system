<?php
include "layout/header_other_pages.php";
?>
    <!--Navigation-->
<?php
include "layout/navigation.php";
?>


<!--Pc case -->
<?php include "layout/pc_case_product_list.php"; ?>

<!--pc motherboard-->
<?php include "layout/pc_motherboard_list.php"; ?>

<!--pc cpu-->
<?php include "layout/pc_cpu_product_list.php"; ?>

<!--pc ram-->
<?php include "layout/pc_ram_product_list.php"; ?>

<!--pc hdd-->
<?php include "layout/pc_hdd_product_list.php"; ?>

<!--pc ssd-->
<?php include "layout/pc_ssd_product.php"; ?>

<!--pc Graphic Card-->
<?php include "layout/pc_graphic_card_product_list.php"; ?>

<!--pc power supply-->
<?php include "layout/pc_power_supply_product_list.php"; ?>

<?php
    if (isset($_POST['']))
?>

<!--PC CASING MODEL & PRICE-->

<?php
if (isset($_GET['selectCaseModel'])) {
    $_SESSION['storedCaseModel'] = $_GET['selectCaseModel'];
}
elseif (!isset($_SESSION['storedCaseModel']) || $_SESSION['storedCaseModel'] == ""){
    $_SESSION['storedCaseModel'] = "";
}

if (isset($_GET['selectCasePrice'])) {
    $_SESSION['storedCasePrice'] = $_GET['selectCasePrice'];
}
elseif (!isset($_SESSION['storedCasePrice']) || $_SESSION['storedCasePrice'] == ""){
    $_SESSION['storedCasePrice'] = "";
}

//MOTHERBOARD & PRICE
if (isset($_GET['selectMoboModel'])){
    $_SESSION['storedMoboModel'] = $_GET['selectMoboModel'];
}
elseif (!isset($_SESSION['storedMoboModel']) || $_SESSION['storedMoboModel'] == ""){
    $_SESSION['storedMoboModel'] = "";
}
if (isset($_GET['selectMoboPrice'])) {
    $_SESSION['storedMoboPrice'] = $_GET['selectMoboPrice'];
}
elseif (!isset($_SESSION['storedMoboPrice']) || $_SESSION['storedMoboPrice'] == ""){
    $_SESSION['storedMoboPrice'] = "";
}

//CPU & PRICE
if (isset($_GET['selectCpuModel'])){
    $_SESSION['storedCpuModel'] = $_GET['selectCpuModel'];
}
elseif (!isset($_SESSION['storedCpuModel']) || $_SESSION['storedCpuModel'] == ""){
    $_SESSION['storedCpuModel'] = "";
}
if (isset($_GET['selectCpuPrice'])) {
    $_SESSION['storedCpuPrice'] = $_GET['selectCpuPrice'];
}
elseif (!isset($_SESSION['storedCpuPrice']) || $_SESSION['storedCpuPrice'] == ""){
    $_SESSION['storedCpuPrice'] = "";
}

//RAM & PRICE
if (isset($_GET['selectRamModel'])){
    $_SESSION['storedRamModel'] = $_GET['selectRamModel'];
}
elseif (!isset($_SESSION['storedRamModel']) || $_SESSION['storedRamModel'] == ""){
    $_SESSION['storedRamModel'] = "";
}
if (isset($_GET['selectRamPrice'])) {
    $_SESSION['storedRamPrice'] = $_GET['selectRamPrice'];
}
elseif (!isset($_SESSION['storedRamPrice']) || $_SESSION['storedRamPrice'] == ""){
    $_SESSION['storedRamPrice'] = "";
}

//HardDisk & PRICE
if (isset($_GET['selectHddModel'])){
    $_SESSION['storedHddModel'] = $_GET['selectHddModel'];
}
elseif (!isset($_SESSION['storedHddModel']) || $_SESSION['storedHddModel'] == ""){
    $_SESSION['storedHddModel'] = "";
}
if (isset($_GET['selectHddPrice'])) {
    $_SESSION['storedHddPrice'] = $_GET['selectHddPrice'];
}
elseif (!isset($_SESSION['storedHddPrice']) || $_SESSION['storedHddPrice'] == ""){
    $_SESSION['storedHddPrice'] = "";
}

//SSD & PRICE
if (isset($_GET['selectSSDModel'])){
    $_SESSION['storedSSDModel'] = $_GET['selectSSDModel'];
}
elseif (!isset($_SESSION['storedSSDModel']) || $_SESSION['storedSSDModel'] == ""){
    $_SESSION['storedSSDModel'] = "";
}
if (isset($_GET['selectSSDPrice'])) {
    $_SESSION['storedSSDPrice'] = $_GET['selectSSDPrice'];
}
elseif (!isset($_SESSION['storedSSDPrice']) || $_SESSION['storedSSDPrice'] == ""){
    $_SESSION['storedSSDPrice'] = "";
}

//Graphic Card & PRICE

if (isset($_GET['selectGraphicCardModel'])){
    $_SESSION['storedGraphicCardModel'] = $_GET['selectGraphicCardModel'];
}
elseif (!isset($_SESSION['storedGraphicCardModel']) || $_SESSION['storedGraphicCardModel'] == ""){
    $_SESSION['storedGraphicCardModel'] = "";
}
if (isset($_GET['selectGraphicCardPrice'])) {
    $_SESSION['storedGraphicCardPrice'] = $_GET['selectGraphicCardPrice'];
}
elseif (!isset($_SESSION['storedGraphicCardPrice']) || $_SESSION['storedGraphicCardPrice'] == ""){
    $_SESSION['storedGraphicCardPrice'] = "";
}

//Power Supply & PRICE

if (isset($_GET['selectPowerSupplyModel'])){
    $_SESSION['storedPowerSupplyModel'] = $_GET['selectPowerSupplyModel'];
}
elseif (!isset($_SESSION['storedPowerSupplyModel']) || $_SESSION['storedPowerSupplyModel'] == ""){
    $_SESSION['storedPowerSupplyModel'] = "";
}
if (isset($_GET['selectPowerSupplyPrice'])) {
    $_SESSION['storedPowerSupplyPrice'] = $_GET['selectPowerSupplyPrice'];
}
elseif (!isset($_SESSION['storedPowerSupplyPrice']) || $_SESSION['storedPowerSupplyPrice'] == ""){
    $_SESSION['storedPowerSupplyPrice'] = "";
}
?>


<div class="build-container">
    <h1>Build pc</h1>
<h4>Choose your pc equipment</h4>
<div class="row">
    <table width="100%" class="table table-hover">
        <tr>
            <td><h6>Case:</h6></td>
            <td>
                <input type="text" id="case_model" placeholder="select your case" readonly value="<?php echo $_SESSION['storedCaseModel'] ?>">
            </td>
            <td><input type="text" id="case_price" name="case_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedCasePrice'] ?>"></td>
            <td><input type="button" id="caseBtn" onclick="casePc()" class="btn btn-dark" name="choose_case" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>Motherboard:</h6></td>
            <td>
                <input type="text" placeholder="select your motherboard" readonly value="<?php echo $_SESSION['storedMoboModel']?>">
            </td>
            <td><input type="text" name="motherboard_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedMoboPrice'] ?>"></td>
            <td><input type="button" id="moboBtn" onclick="mobo()" class="btn btn-dark" name="choose_case" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>CPU:</h6></td>
            <td>
                <input type="text" name="cpu" placeholder="select your cpu" readonly value="<?php echo $_SESSION['storedCpuModel'] ?>">
            </td>
            <td><input type="text" name="cpu_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedCpuPrice'] ?>"></td>
            <td><input type="button" id="cpuBtnl" onclick="cpuBtnDisplay()" class="btn btn-dark" name="choose_cpu" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>RAM:</h6></td>
            <td>
                <input type="text" name="ram" placeholder="select your ram" readonly value="<?php echo $_SESSION['storedRamModel'] ?>" >
            </td>
            <td><input type="text" name="ram_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedRamPrice'] ?>"></td>
            <td><input type="button" id="ramBtnl" onclick="ramBtnDisplay()" class="btn btn-dark" name="choose_ram" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>Hard Disk:</h6></td>
            <td>
                <input type="text" name="hard_disk" placeholder="select your HDD" readonly value="<?php echo $_SESSION['storedHddModel'] ?>" >
            </td>
            <td><input type="text" name="hard_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedHddPrice'] ?>"></td>
            <td><input type="button" id="hddBtnl" onclick="hddBtnDisplay()" class="btn btn-dark" name="choose_hard_disk" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>SSD:</h6></td>
            <td>
                <input type="text" name="ssd" placeholder="select your SSD" readonly value="<?php  echo $_SESSION['storedSSDModel'] ?>" >
            </td>
            <td><input type="text" name="ssd_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedSSDPrice'] ?>"></td>
            <td><input type="button" onclick="ssdBtnDisplay()" id="ssdBtnl" class="btn btn-dark" name="choose_ssd_disk" value="Choose"></td>
        </tr>
        <tr>
            <td><h6>Graphic Card:</h6></td>
            <td>
                <input type="text" name="graphic_card" placeholder="select your Graphic Card" readonly value="<?php echo $_SESSION['storedGraphicCardModel'] ?>" >
            </td>
            <td><input type="text" name="graphic_card_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedGraphicCardPrice'] ?>"></td>
            <td><input type="button" onclick="graphicCardBtnDisplay()" id="GraphicCardBtnl" class="btn btn-dark" name="choose_graphic_card" value="Choose"></td>
        </tr>
        <tr>
            <td>
                <label for="case">Power Supply:</label>
            </td>
            <td>
                <input type="text" name="power_supply" placeholder="select your Power supply" readonly value="<?php echo $_SESSION['storedPowerSupplyModel'] ?>" >
            </td>
            <td><input type="text" name="power_supply_price" placeholder="RM 0" readonly value="<?php echo $_SESSION['storedPowerSupplyPrice'] ?>"></td>
            <td><input type="button" id="powerBtnl" onclick="powerSupplyDisplay()" class="btn btn-dark" name="choose_power_supply" value="Choose"></td>
        </tr>
        <tr>
            <td></td>
            <td><label for="Total">Total price</label></td>
            <td><?php echo (int)$_SESSION['storedCasePrice']
                    +   (int)$_SESSION['storedMoboPrice']
                    +   (int)$_SESSION['storedGraphicCardPrice']
                    +   (int)$_SESSION['storedHddPrice']
                    +   (int)$_SESSION['storedSSDPrice']
                    +   (int)$_SESSION['storedRamPrice']
                    +   (int)$_SESSION['storedCpuPrice']
                    +   (int)$_SESSION['storedPowerSupplyPrice'];
                ?>
            </td>
            <td>
                <form action="" method="post">
                <input type="button" class="btn btn-dark" value="Make Order" name="confirmOrder">
                </form>
            </td>
        </tr>
    </table>
</div>
</div>



<!-- Footer -->
<?php
include "layout/footer.php";
?>
