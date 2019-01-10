<div id="myGraphicCardBlock" class="modal" style="overflow:scroll">
    <div class="modal-content" style="width: 1200px">
        <h1 class="selectGraphicCard">Select Graphic Card</h1>
        <div class="col-lg-9">
            <div class="row">
                <?php
                $query = "SELECT * FROM graphiccard";
                $select_all_graphic_card = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($select_all_graphic_card))
                {
                    $graphic_card_id = $row['graphic_card_id'];
                    $graphic_card_brand = $row['brand'];
                    $graphic_card_model = $row['model'];
                    $graphic_card_rate = $row['rate'];
                    $graphic_card_price = $row['price'];
                    $graphic_card_details = $row['detail'];
                    $pc_graphic_card_image = $row['graphic_card_image'];

                    echo "<div class='col-lg-4 col-md-6 mb-4'>
                            <div class='card h-100'>
                                 <img class='card-img-top' width='360px' height='200px' src='img/pc%20product/graphic_card/$pc_graphic_card_image'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <a href='#'>$graphic_card_brand  $graphic_card_model</a>
                                        </h4>
                                        <h5>RM $graphic_card_price</h5>
                                        <p class='card-text'></p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>Details : $graphic_card_details</small><br>
                                <small class='text-muted'>Rate : $graphic_card_rate</small><br>
                                <small class='text-muted'><form action='build.php' method='get'>
                                        <input type='hidden' value='$graphic_card_model' name='selectGraphicCardModel'>
                                        <input type='hidden' value='$graphic_card_price' name='selectGraphicCardPrice'>
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