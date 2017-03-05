<?php
ini_set('display_errors', 1);

session_start();
require_once '../lib/db_connect.php';
require_once '../forms/comment_form.php';
require_once '../lib/db_queries.php';

$id = $_GET['id'];
$post_id = $_GET['post_id'];
?>
<html>
<head>
    <title>Редактирование комментария</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
    <?php
        if (!empty($id)) {
//            $query = "SELECT * FROM comments WHERE id=$id";
//            $result = mysqli_query($connect, $query);
//            if (!$comment = mysqli_fetch_object($result)) {
            if (!$comment = select_record('comments', 'id', $id, true)) {
                $_SESSION['message'] = "Ваш коммент 404!";
                return header('Location: http://feed.loc/show.php?id='.$post_id.' ');
            } else {
                echo get_comment_form("update_comment.php?id=$comment->id&post_id=$post_id", 'edit', $comment);
            }
        } else {
            $_SESSION['message'] = "Введите корректный id";
            return header('Location: http://feed.loc/show.php?id='.$post_id.' ');
        }
    ?>
    </div>
</div>
</body>
</html>