<?php
/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 20/11/2018
 * Time: 12:24 AM
 */
$_SESSION = array();
session_destroy();
header("Location: ../build.php");

