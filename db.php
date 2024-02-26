<?php
// $con = mysqli_connect("localhost","root","","Hotel") or die(mysql_error());

$con = mysqli_connect("localhost", "root", "", "Hotel");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}


?>