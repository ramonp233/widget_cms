<?php
/**
 * Created by PhpStorm.
 * User: Ramon
 * Date: 7.02.2015
 * Time: 13:29
 */

$dbhost = "localhost";
$dbuser = "widget_cms";
$dbpass = "password1";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
}

$editmode = true;
?>
