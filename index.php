<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 22.02.17
 * Time: 21:46
 */
require_once 'lib/flash_messages.php';
require_once 'lib/db_queries.php';

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap.min.css"/>
</head>
<body>
<?php echo show_flash_message('message');
?>
<table class='table'>
    <thead>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Ссылка</th>
        <th>Удалить</th>
        <th>Редактировать</th>
    </thead>
    <tbody>
    <?php
        foreach(select_record('posts') as $post){
            echo '<tr>';
            echo '<td>',$post->id,'</td>';
            echo '<td>',$post->title,'</td>';
            echo '<td>',$post->description,'</td>';
            echo '<td>',"<a href='/show.php?id=$post->id'>Читать...</a>",'</td>';
            echo '<td>',"<a href='/delete.php?id=$post->id'>Удалить</a>",'</td>';
            echo '<td>',"<a href='/edit_post.php?id=$post->id'>Редактирвать</a>",'</td>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>
<a class="btn btn-primary" href="/new_post.php">Новый пост</a>
</body>
</html>




