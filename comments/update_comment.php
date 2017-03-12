<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 03.03.17
 * Time: 8:34
 */
ini_set('display_errors', 1);



require_once '../lib/db_connect.php';
require_once '../lib/db_queries.php';
require_once '../lib/flash_messages.php';

$comment_data = [
    'id' => $_GET['id'],
    'content' => $_POST['content'],
    'post_id' => $_GET['post_id']
];

$post_id = $_GET['post_id'];

//$query = "UPDATE comments SET content='$description' WHERE id=$id";
//$result = mysqli_query($connect, $query);
$result = update_record('comments', $comment_data);
if(!$result){
    print_r(mysqli_error_list($connect));
}else{
    $_SESSION['message'] = "Ваш коммент обновлен!";
    return header('Location: http://feed.loc/show.php?id='.$post_id.'');
}

