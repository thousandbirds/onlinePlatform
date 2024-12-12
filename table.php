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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Table</title>
</head>
<body>
<table class="table">
        <tr>
            <th class="upper__item">id</th>
            <th class="upper__item">name</th>
            <th class="upper__item">description</th>
            <th class="upper__item item__update"></th>
            <th class="upper__item item__del"></th>
            <th class="upper__item item__view"></th>
        </tr>
        <?php
            $stuff = mysqli_query($connect, query:"SELECT * FROM `shop clothes`");
            $stuff = mysqli_fetch_all($stuff);
            foreach($stuff as $stuff){
                ?>
                    <tr>
                        <td class="lower__item"><?=$stuff[0]?></td>
                        <td class="lower__item"><?=$stuff[1]?></td>
                        <td class="lower__item"><?=$stuff[2]?></td>
                        <td class="lower__item lower__item__update">
                            <a href="update.php?id=<?=$stuff[0]?>" target="_blank">Update</a>
                        </td>
                        <td class="lower__item lower__item__del"><a href="vender/delete.php?id=<?=$stuff[0]?>">Delete</a></td>
                        <td class="lower__item lower__item__view"><a href="vender/view.php?=$stuff[0]?>">View</a></td>
                    </tr>
                <?php 
            }
        ?>
    </table>
</body>
</html>