<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 19:29
 */

session_start();

require_once 'lib/db_connect.php';

$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO posts (title, description) VALUES ('$title', '$description')";
$result = mysqli_query($connect, $query);
if(!$result){
    print_r(mysqli_error_list($connect));
}else{
    $_SESSION['message'] = "Ваш пост сохранен! $title";
    return header('Location:/');
}

