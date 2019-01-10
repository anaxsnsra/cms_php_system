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
            <h1>View all Customer order</h1>
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
                    default:
                        include "layout/view_all_user.php";
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
