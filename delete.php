<?php

    include('connect.php');
    include("app.php");

    $id = $_GET['id'];

    $obj = new app();
    $obj->delete($id);

    header('location:read.php');

