<?php

require_once 'config/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>shop of clothes</title>
</head>
<body>

    <form class="form" action="vender/create.php" method="post">
        <p>Id</p>
        <input class="input" type="text" name="id">
        <p>Title</p>
        <input class="input" type="text" name="title">
        <p>Desriotion</p>
        <textarea class="field" name="desriotion"></textarea>
        <input class="btn__submit" type="submit" value="Add">
    </form>
</body>
</html>