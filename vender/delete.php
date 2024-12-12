<?php

require_once '../config/connect.php';

$stuff_id=$_GET['id'];

mysqli_query($connect, query:"DELETE FROM `shop clothes` WHERE `shop clothes`.`id` = '$stuff_id'");

header('Location: ../index.php')

?>