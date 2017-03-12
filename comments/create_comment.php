<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 19:29
 */

ini_set('display_errors', 1);


require_once '../lib/flash_messages.php';
require_once '../lib/db_connect.php';
require_once '../lib/db_queries.php';

$post_id = $_GET['post_id'];
$_POST['post_id'] = $post_id;

//$query = "INSERT INTO comments (post_id, content) VALUES ('$post_id', '$description')";
//$result = mysqli_query($connect, $query);
$result = create_record('comments', $_POST);
if(!$result){
    print_r(mysqli_error_list($connect));
}else{
    $_SESSION['message'] = "Ваш коммент сохранен!";
    return header('Location: http://feed.loc/show.php?id='.$post_id.'');
}

