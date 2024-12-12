<?php

require_once '../config/connect.php';

$stuff_id=$_POST['id'];
$stuff_upid=$_POST['upid'];

$name = $_POST['title'];
$desriotion = $_POST['desriotion'];

mysqli_query($connect, query:"UPDATE `shop clothes` SET `name` = '$name', `description` = '$desriotion', `id` = '$stuff_upid' WHERE `shop clothes`.`id` = '$stuff_id'");

header('Location: ../index.php');

?>