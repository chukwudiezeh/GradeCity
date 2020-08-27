<?php
/**
 * Created by PhpStorm.
 * User: gblend
 * Date: 11/25/2019
 * Time: 10:38 AM
 */
$dbhostname = "localhost";
$dbname = "gradecity";
$username = "root";
$password = "";

$conn = new mysqli($dbhostname, $username, $password, $dbname);
//Report error
if(mysqli_connect_errno()) {
    echo "Connection to database failed: %s\n", mysqli_connect_error();
}
