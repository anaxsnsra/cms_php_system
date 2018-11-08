<?php
/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 6/11/2018
 * Time: 5:02 PM
 */

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_database'] = "erinapcworkshop";

foreach ($db as $key => $value)
{
    define(strtoupper($key),$value);
}

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

//if ($con)
//{
//    echo "database connected";
//}
//else
//{
//    die("Database failed" . mysqli_error($con));
//}