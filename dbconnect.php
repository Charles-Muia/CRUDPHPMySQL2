<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "crud_app_2";
// Create connection
$connect = mysqli_connect($host, $db_user, $db_password, $db_name);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
