<?php
ini_set('display_errors', 1);

require_once 'lib/db_queries.php';
require_once 'lib/flash_messages.php';

echo show_flash_message('message');


?>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

<?php
//$query = mysqli_query($connect,"SELECT * FROM posts WHERE id={$_GET['id']}");
if($post = select_record('posts', 'id', $_GET['id'], true)){
    echo '<h1>', $post->title,'</h1>';
    echo '<p>', $post->description,'</p>';
    echo '<a href="/">Cсылка назад</a>', ' <a style="margin-left: 2%" class="btn btn-primary" href="/comments/new_comment.php?post_id='.$post->id.'">Новый коммент</a>
';
}else{
    echo '<h1>Пост отсутствует!</h1>';
}
?>

<table class='table'>
    <thead>
    <th>ID</th>
    <th>Описание</th>
    <th>Удалить</th>
    <th>Редактировать</th>
    </thead>
    <tbody>

<?php
//$query_comment = mysqli_query($connect,"SELECT * FROM comments WHERE post_id={$_GET['id']}");
//while ($comment = mysqli_fetch_object($query_comment)){
foreach (select_record('comments', 'post_id', $_GET['id']) as $comment){
    echo '<tr>';
    echo '<td>', $comment->id, '</td>';
    echo '<td>', $comment->content, '</td>';
    echo '<td>',"<a href='/comments/delete_comment.php?id=$comment->id&post_id=$post->id'>Удалить</a>",'</td>';
    echo '<td>',"<a href='/comments/edit_comment.php?id=$comment->id&post_id=$post->id'>Редактирвать</a>",'</td>';
    echo '</tr>';
}
?>

</body>
</html>
