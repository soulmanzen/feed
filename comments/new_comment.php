<?php
ini_set('display_errors', 1);

require_once '../forms/comment_form.php'; ?>
<html>
<head>
    <title>Новый комментарий</title>
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
        $post_id = $_GET['post_id'];
        echo get_comment_form('create_comment.php?post_id='.$post_id.'', 'new'); ?>
    </div>
</div>
</body>
</html>