<div id="myCaseBlock" class="modal" style="overflow: scroll">
    <div class="modal-content">
        <h1>Select PC Case</h1>
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
                                        <form action='build.php' method='get' id='caseForm'>
                                        <input type='hidden' name='selectCaseModel' value='$model'>
                                        <input type='hidden' name='selectCasePrice' value='$case_price'>
                                        <input type='submit' class='btn btn-primary' value='choose your casing'>
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