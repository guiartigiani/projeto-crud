<?php

include('connect.php');
include('app.php');
include('update.php');


$id = $_POST['id'];
$name=$_POST['name'];
$address = $_POST['address'];

mysqli_query($conn, "UPDATE ADDRESS SET NAME='$name', ADDRESS='$address' WHERE ID='$id'");
header("location:read.php");