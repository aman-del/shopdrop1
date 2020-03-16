<?php
include "adminheader.php";
$categoryname = urlencode($_POST['categoryname']);
$description = urlencode($_POST['description']);

$s = "select * from categoryname where='$categoryname'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:category.php?er=0");
} else {
    $sql="Insert Into category(categoryname,description) VALUES('$categoryname','$description')";
    mysqli_query($conn,$sql);
    header("Location:category.php?er=1");
}
