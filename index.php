<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 22.02.17
 * Time: 21:46
 */
session_start();
require_once 'lib/db_connect.php';

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap.min.css"/>
</head>
<body>
<?php if(!empty($_SESSION['message'])){
     echo $_SESSION['message'];
}
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
        $query = mysqli_query($connect,"SELECT * FROM posts");
        while($post = mysqli_fetch_object($query)){
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




