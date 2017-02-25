<?php
/**
 * Created by PhpStorm.
 * User: soulman
 * Date: 25.02.17
 * Time: 14:21
 */
$connect = mysqli_connect('localhost', 'root', '1a2a3a');

if (!$connect){
    die('Ошибка подключения: '. mysqli_connect_error($connect));
}

mysqli_select_db($connect, 'feed');