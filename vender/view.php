<?php

require_once '../config/connect.php';

$stuff_id = $_GET['id'];
$stuff = mysqli_query($connect, query:"SELECT * FROM `shop clothes` WHERE `id` = '$stuff_id'");
$stuff = mysqli_fetch_assoc($stuff);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>view</title>
</head>
<body>
    <h2>Name:<?= $stuff['name'] ?></h2>
    <h4>Description: <?= $stuff['description'] ?></h4>
</body>
</html>