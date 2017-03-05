<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 19:29
 */

ini_set('display_errors', 1);

session_start();

require_once '../lib/db_connect.php';
require_once '../lib/db_queries.php';

$post_id = $_GET['post_id'];
$description = $_POST['description'];

//$query = "INSERT INTO comments (post_id, content) VALUES ('$post_id', '$description')";
//$result = mysqli_query($connect, $query);
$result = create_record('comments', $description, false, $post_id);
if(!$result){
    print_r(mysqli_error_list($connect));
}else{
    $_SESSION['message'] = "Ваш коммент сохранен!";
    return header('Location: http://feed.loc/show.php?id='.$post_id.'');
}

