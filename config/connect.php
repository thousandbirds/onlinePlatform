<?php

$connect = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'crud');

if(!$connect){
    die('Erro to connect datebase!');
}

?>