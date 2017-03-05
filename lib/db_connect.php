<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 25.02.17
 * Time: 14:19
 */
include_once 'config.php';
$config = get_db_config();

ini_set('display_errors', 1);
$connect = mysqli_connect('localhost', $config['user'], $config['password']);

if(!$connect){
    die('Ошибка подключения: '. mysqli_connect_error($connect));
}


mysqli_select_db($connect, 'feed');