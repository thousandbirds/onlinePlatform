<?php

require_once 'config/connect.php';

$stuff_id=$_GET['id'];

$stuff = mysqli_query($connect, "SELECT * FROM `shop clothes` WHERE `id` = '$stuff_id'");
$stuff = mysqli_fetch_assoc($stuff);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Update stuff</title>
</head>
<body>
    <form class="form" action="vender/update.php" method="post">
        <p>Id</p>
        <input class="input" type="text" name="upid" value="<?= $stuff['id'] ?>">
        <p>Title</p>
        <input class="input" type="text" name="title" value="<?= $stuff['name'] ?>">
        <p>Desriotion</p>
        <textarea class="field" name="desriotion"><?= $stuff['description'] ?></textarea>
        <input class="btn__submit" type="submit" value="Update stuff">
        <input class="opacity" type="text" name="id" value="<?= $stuff['id'] ?>">
    </form> 
</body>
</html>
