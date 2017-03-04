<?php
require_once 'lib/db_connect.php';


session_start();
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 20:45
 */
$id = $_GET['id'];
if (!empty($id)) {
    $query = "DELETE FROM posts WHERE id=$id";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        print_r(mysqli_error_list($connect));
    } else {
        $_SESSION['message'] = "Ваш пост УДАЛЕН!";
        return header('Location:/');
    }
}else{
    $_SESSION['message'] = "Введите корректный id";
    return header('Location:/');
}
