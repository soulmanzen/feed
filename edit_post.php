<?php
session_start();
require_once 'lib/db_connect.php';
require_once 'post_form.php';
$id = $_GET['id'];
?>
<html>
<head>
    <title>Тестовая форма</title>
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
            $query = "SELECT * FROM posts WHERE id=$id";
            $result = mysqli_query($connect, $query);
            if (!$post = mysqli_fetch_object($result)) {
                $_SESSION['message'] = "Ваш пост 404!";
                return header('Location:/');
            } else {
                echo get_post_form("update_post.php?id=$post->id", 'edit', $post);
            }
        } else {
            $_SESSION['message'] = "Введите корректный id";
            return header('Location:/');
        }
    ?>
    </div>
</div>
</body>
</html>