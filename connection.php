<?php

error_reporting(0);
$conn = mysqli_connect("localhost", "root", NULL, "shopdrop");
if (!$conn) {
    die("connection failed due to " . mysqli_connect_error());
}
