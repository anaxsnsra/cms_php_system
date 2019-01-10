<?php
include "db.php";
/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 19/12/2018
 * Time: 3:25 AM
 */
if (isset($_POST['action']))
{
    $query = "SELECT * FROM pc_case";
    if (isset($_POST["minimum_price"], $_POST['maximum_price']) && !empty($_POST['minimum_price']) && !empty($_POST['maximum_price']))
    {
        $query .= "AND price BETWEEN '".$_POST['minimum_price']."' AND '".$_POST['maximum_price']."'";
    }
    if (isset($_POST['brand']))
    {
        $brand_filter = implode("','", $_POST['brand']);
        $query .= " AND brand IN('".$brand_filter."')";
    }
    if (isset($_POST['size']))
    {
        $size_filter = implode("','", $_POST['size']);
        $query .= " AND size IN('".$size_filter."')";
    }

    $select_all_case_filter = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($select_all_case_filter);
    $total_row = mysqli_num_rows($select_all_case_filter);
    $output = "";
    if ($total_row > 0)
    {
        foreach ($result as $row)
        {
            $case_id = $row['case_id'];
            $brand = $row['brand'];
            $model = $row['model'];
            $size = $row['size'];
            $rate = $row['rate'];
            $case_price = $row['price'];
            $details = $row['details'];
            $pc_case_image = $row['pc_case_image'];

            $output .= "<div class='col-lg-4 col-md-6 mb-4'>
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
    }
    else
    {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}