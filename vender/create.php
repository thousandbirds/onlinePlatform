<?php

require_once '../config/connect.php';

$stuff_id = $_POST['id'];
$name = $_POST['title'];
$desriotion = $_POST['desriotion'];

mysqli_query($connect, query:"INSERT INTO `shop clothes` (`id`, `name`, `description`) VALUES ('$stuff_id', '$name', '$desriotion')");

header('Location: ../index.php');

?>