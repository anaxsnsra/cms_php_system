<?php
session_start();

/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 6/11/2018
 * Time: 8:48 PM
 */
include "../layout/db.php";
include "layout/admin_header.php";
include "layout/admin_navigation.php";
?>
<div id="wrapper">
    <?php
    include "layout/admin_sidebar.php";
    ?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="col-xs-6">
                <?php
                if (isset($_GET['source']))
                {
                    $source = $_GET['source'];
                }
                else
                {
                    $source = "";
                }
                switch ($source)
                {
                    case 'graphic_card';
                    include "layout/view_graphic_card_product.php";
                    break;

                    case 'add_gpu';
                        include "layout/add_new_gpu_product.php";
                        break;

                     case 'case';
                     include "layout/view_case_product.php";
                     break;

                    case 'add_case';
                    include "layout/add_new_case_product.php";
                    break;

                    case 'mobo';
                    include "layout/view_mobo_product.php";
                    break;

                    case 'add_mobo';
                    include "layout/add_new_mobo_product.php";
                    break;

                    case 'ram';
                    include "layout/view_ram_product.php";
                    break;

                    case 'add_ram';
                    include "layout/add_new_ram_product.php";
                    break;

                    case 'psu';
                        include "layout/view_psu_product.php";
                        break;

                    case 'add_psu';
                        include "layout/add_new_psu_product.php";
                        break;

                    case 'hdd';
                        include "layout/view_hdd_product.php";
                        break;

                    case 'add_hdd';
                        include "layout/add_new_hdd_product.php";
                        break;

                    case 'ssd';
                        include "layout/view_ssd_product.php";
                        break;

                    case 'add_ssd';
                        include "layout/add_new_ssd_product.php";
                        break;

                    case 'cpu';
                        include "layout/view_cpu_product.php";
                        break;

                    case 'add_cpu';
                        include "layout/add_new_cpu_product.php";
                        break;

                    default:
                        include "layout/product_chart.php";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include "layout/admin_footer.php";
?>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>



</body>
</html>
