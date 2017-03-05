<?php
require_once 'lib/db_queries.php';


session_start();
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 20:45
 */
$id = $_GET['id'];
if (!empty($id)) {
    if (!delete_record('posts', 'id', $id)) {
        $_SESSION['message'] = "Ошибка удаления!";
    } else {
        $_SESSION['message'] = "Ваш пост УДАЛЕН!";
    }
}else{
    $_SESSION['message'] = "Введите корректный id";
}
return header('Location:/');