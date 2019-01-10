<?php
if (isset($_GET['delete_gpu']))
{
    $the_graphic_card_id = $_GET['delete_gpu'];
    $query = "DELETE FROM graphiccard WHERE graphic_card_id = {$the_graphic_card_id}";
    $delete_query = mysqli_query($con, $query);
    if (!$delete_query)
    {
        die("QUERY FAILED" . mysqli_error($con));
    }
    header("Location: products.php?source=graphic_card");

}
elseif (isset($_GET['delete_case']))
{
    $the_case_id = $_GET['delete_case'];
    $query = "DELETE FROM pc_case WHERE case_id = {$the_case_id}";
    $delete_query = mysqli_query($con, $query);
    if (!$delete_query)
    {
        die("QUERY FAILED" . mysqli_error($con));
    }
    header("Location: products.php?source=case");

}
elseif (isset($_GET['delete_mobo']))
{
    $the_mobo_id = $_GET['delete_mobo'];
    $query = "DELETE FROM motherboard WHERE mobo_id = {$the_mobo_id}";
    $delete_query = mysqli_query($con, $query);
    if (!$delete_query)
    {
        die("QUERY FAILED" . mysqli_error($con));
    }
    header("Location: products.php?source=mobo");

}
elseif (isset($_GET['delete_ram']))
{
    $the_ram_id = $_GET['delete_ram'];
    $query = "DELETE FROM pc_ram WHERE ram_id = {$the_ram_id}";
    $delete_query = mysqli_query($con, $query);
    if (!$delete_query)
    {
        die("QUERY FAILED" . mysqli_error($con));
    }
    header("Location: products.php?source=ram");

}