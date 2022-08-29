<?php

include("connect.php");
include("app.php");
include("update.php");


$name = $_GET["name"];
$address = $_GET["address"];




$obj = new app();
$obj->setName($name);
$obj->setAddress($address);
$obj->create($obj->getName(),$obj->getAddress());



header('location:read.php');