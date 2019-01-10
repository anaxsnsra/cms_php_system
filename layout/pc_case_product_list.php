<div id="myCaseBlock" class="modal" style="overflow: scroll">
    <div class="modal-content">
        <h1 class="selectPc">Select PC Case</h1>
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
                            <img class='card-img-top' width='350px' height='200px' src='img/pc%20product/case/$pc_case_image'>
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
                                        <input type='submit' class='btn btn-primary' value='choose' style='margin-left: -10px'>
                                        </form>                              
                                    </div> 
                         </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        filter_data();
        function filter_data() {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var brand = get_filter('brand');
            var size = get_filter('size');
            var socket = get_filter('socket');
            var ramSupport = get_filter('ram_support');
            var power = get_filter('power');

            $.ajax({
                url: "layout/fetch_data.php",
                method: "POST",
                data:{
                    action:action, minimum_price:minimum_price, maximum_price:maximum_price,brand:brand,size:size,socket:socket,ramSupport:ramSupport,power:power
                }, success:function (data) {
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name) {
            var filter = [];
            $('.'+class_name+':checked').each(function () {
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function () {
            filter_data();
        });

        $('#price_range').slider({
            range:true,
            min:0,
            max:6500,
            values:[0,6500],
            step:20,
            slide:function (event, ui) {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });
    </script>
</div>
