<?php
ini_set('display_errors', 1);

require_once '../lib/db_connect.php';

session_start();
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 20:45
 */
$id = $_GET['id'];
$post_id = $_GET['post_id'];
if (!empty($id)) {
    $query = "DELETE FROM comments WHERE id=$id";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        print_r(mysqli_error_list($connect));
    } else {
        $_SESSION['message'] = "Ваш коммент УДАЛЕН!";
        return header('Location: http://feed.loc/show.php?id='.$post_id.'');
    }
}else{
    $_SESSION['message'] = "Введите корректный id";
    return header('Location: http://feed.loc/show.php?id='.$post_id.'');
}
